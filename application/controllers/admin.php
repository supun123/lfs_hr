<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 9/9/2018
 * Time: 10:18 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function index()
    {
        $this->load->model('super_user');

        $data['user_details'] = $this->super_user->get_user_details();
       // print_r( $this->super_user->get_user_details());
        $this->session->set_flashdata('msg_admin_panel','user_details');
        $this->load->view('partials/header');
        $this->load->view('partials/sub_header');
        $this->load->view('filter',$data);

    }
    public function Companies()
    {
        $this->load->model('super_user');

        $data['companies'] = $this->super_user->get_companies();
        $this->session->set_flashdata('msg_admin_panel','companies');
        $this->load->view('partials/header');
        $this->load->view('partials/sub_header');
        $this->load->view('Companies',$data);

    }
    public function experiences()
    {
        $this->load->model('super_user');
        $data['experience'] = $this->super_user->get_experiences();
        $this->session->set_flashdata('msg_admin_panel','experiences');
        $this->load->view('partials/header');
        $this->load->view('partials/sub_header');
        $this->load->view('experiences',$data);

    }
    public function job_titles()
    {
        $this->load->model('super_user');
        $data['job_titel'] = $this->super_user->get_job_titles();
        $this->session->set_flashdata('msg_admin_panel','job_titles');
        $this->load->view('partials/header');
        $this->load->view('partials/sub_header');
        $this->load->view('job_titles',$data);

    }
    public function admin_users()
    {

        $this->load->model('super_user');
        $data['user'] = $this->super_user->get_admin_users();
        $this->session->set_flashdata('msg_admin_panel','admin_users');
        $this->load->view('partials/header');
        $this->load->view('partials/sub_header');
        $this->load->view('admin_users',$data);

    }
    public function related_fields()
    {
        $this->load->model('super_user');
        $data['related_field'] = $this->super_user->get_related_fields();
        $this->session->set_flashdata('msg_admin_panel','related_fields');
        $this->load->view('partials/header');
        $this->load->view('partials/sub_header');
        $this->load->view('related_fields',$data);

    }
    public function  register(){



        $this->form_validation->set_rules('userName', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('conform_password', 'Conform Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('partials/header');
            $this->load->view('adminRegister');
        }
        else
        {
            $this->load->model('super_user');
            $responce=$this->super_user->register();
            if($responce){
                $this->session->set_flashdata('msg','registered successfully');
                redirect('/');
            }
            else{
                $this->session->set_flashdata('msg','something went wrong');
                redirect('admin/get_register_form');
            }
        }
    }


    public function get_register_form(){
        $this->load->view('partials/header');
        $this->load->view('adminRegister');
    }
    public function get_signIn_page(){
        $this->load->view('partials/header');
        $this->load->view('admin_signIn_page');
    }
    public function  signIn(){
        $this->form_validation->set_rules('userName', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('partials/header');
            $this->load->view('admin_signIn_page');
        }
        else
        {
            $this->load->model('super_user');
            $responce=$this->super_user->signIn();
            if($responce!=false){
                $this->session->set_flashdata('msg','logging successfully');
                $userdata=array(
                    'name'=>$responce->name,
                    'loggedin'=>TRUE
                );
                $this->session->set_userdata($userdata);
                redirect('/admin/');
            }
            else{
                $this->session->set_flashdata('msg','Wrong Username or password');
                redirect('/admin/get_signIn_page');
            }


        }
    }
    public function sign_out(){
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('loggedin');
        redirect('/');
    }
    public  function get_volunteer_profile($id){
        $this->load->model('super_user');
        $data['user_details_given_id']=$this->super_user->get_user_details_given_id($id);
        $data['companies_experience_given_id']=$this->super_user->get_companies_and_experience_for_given_id($id);
        //echo '<pre>';
       // print_r($data['companies_experience_given_id']);


        $data['job_titel'] = $this->super_user->get_job_titles();
        $data['related_field'] = $this->super_user->get_related_fields();

        //$data['job_titles']=$this->super_user->get_job_titles_given_id($id);
        //$data['related_field']=$this->super_user->get_related_field_given_id($id);
         //print_r($data);


        $this->load->view('partials/header');
        $this->load->view('volunteer_profile',$data);

    }
    public function update_user_data (){

        /*$id= $this->input->post('id_experience[0][0]', TRUE);
        $com_id0=$this->input->post('id_experience[0][1]', TRUE);
        $com_id1= $this->input->post('id_experience[1][0]', TRUE);
        $com_id2= $this->input->post('id_experience[1][1]', TRUE);
        echo'<pre>' ;
        echo $id ;
        echo $com_id0;
        echo $com_id1;
        echo $com_id2;*/

       // echo $com_id0,$com_id1 ;
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile1', 'Phone Number 1', 'required|is_natural');
        $this->form_validation->set_rules('mobile2', 'Phone Number 2', 'required|is_natural');
        $this->form_validation->set_rules('job_title', 'linkedIn Link', 'required');
        $this->form_validation->set_rules('Prefe_Ar_To_Contri', 'Preferred Area To Contribute', 'required');
        $this->form_validation->set_rules('description', 'Description|max_length[150]', 'required');

        $id= $this->input->post('id', TRUE);

        if ($this->form_validation->run() == FALSE)
        {
            //if validation fail load volunteer_profile

            $this->get_volunteer_profile( $id);
        }else{
            $this->load->model('super_user');
            $responce=$this->super_user->update_user($id);
            if($responce){
                $this->session->set_flashdata('msg','Update form Successfully');
                redirect('/admin/');
            }
            else{
                $this->session->set_flashdata('msg','something went wrong');
                redirect('/admin/get_volunteer_profile/'.$id);
            }
        }

   }
   public function delete_experiance(){

       $this->load->model('super_user');
       $result = $this->super_user->delete_Experience_row();
       echo $result ;
      // location.reload(true);
   }
   public  function delete_company(){
       $this->load->model('super_user');
       $result = $this->super_user->delete_company();
       echo $result ;
       //location.reload(true);
   }
}