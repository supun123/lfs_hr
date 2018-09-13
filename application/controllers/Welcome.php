<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
        $this->load->model('super_user');
        $data['job_titel'] = $this->super_user->get_job_titles();
        $data['related_field'] = $this->super_user->get_related_fields();
		$this->load->view('welcome_message',$data);
	}
    public function register_volunteers()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile1', 'Phone Number 1', 'required|is_natural');
        $this->form_validation->set_rules('mobile2', 'Phone Number 2', 'required|is_natural');
        $this->form_validation->set_rules('job_title', 'linkedIn Link', 'required');
        $this->form_validation->set_rules('Prefe_Ar_To_Contri', 'Preferred Area To Contribute', 'required');
        $this->form_validation->set_rules('description', 'Description|max_length[150]', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }else{
            $this->load->model('registerUser');
            $responce=$this->registerUser->register();
            if($responce){
                $this->session->set_flashdata('msg','Submit form Successfully');
                redirect('/');
            }
            else{
                $this->session->set_flashdata('msg','something went wrong');
                redirect('/');
            }
       }
    }
    public function filter_data(){
	   // echo "filter_data";
        $this->load->view('partials/header');
        $this->load->view('filter');
    }
    public function get_Job_Title(){
        $this->load->model('welcome');
        $responce=$this->registerUser->register();
    }
    public function get_preferred_area(){
        $this->load->model('registerUser');
        $responce=$this->registerUser->register();
    }


}
