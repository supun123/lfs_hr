<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 9/9/2018
 * Time: 11:23 AM
 */

class super_user extends CI_Model
{

    public function get_user_details()
    {
       $data =$this->db->query('SELECT* FROM user_details');
        $array=$data->result_array();
        return $array;
    }
    public function get_companies()
    {
        $data =$this->db->query('SELECT* FROM company');
        $array=$data->result_array();
        return $array;
    }
    public function get_experiences()
    {
        $data =$this->db->query('SELECT* FROM experience');
        $array=$data->result_array();
        return $array;
    }
    public function get_job_titles()
    {
        $data =$this->db->query('SELECT* FROM job_titel');
        $array=$data->result_array();
        return $array;
    }
    public function get_admin_users()
    {
        $data =$this->db->query('SELECT* FROM user');
        $array=$data->result_array();
        return $array;
    }
    public function get_related_fields()
    {
        $data =$this->db->query('SELECT* FROM related_field');
        $array=$data->result_array();
        return $array;
    }
    public function register(){
        $data=array(
            'name'=>$this->input->post('userName',TRUE),
            'password'=>sha1($this->input->post('conform_password',TRUE))

        );

        return $this->db->insert('user',$data);

    }
    public function  signIn(){
        $userName=$this->input->post('userName',TRUE);
        $password=sha1($this->input->post('password',TRUE));
        $this->db->where('name',$userName);
        $this->db->where('password',$password);
        $respond=$this->db->get('user');


        if($respond->num_rows()==1){
            return $respond->row(0);
            die();
        }else{
            return false;
            die();

        }

    }
    public function get_user_details_given_id($id){
        $data =$this->db->query('SELECT * FROM user_details  WHERE id='.$id);
        $array=$data->result_array();
        return $array;
    }
    public function get_companies_and_experience_for_given_id($id){
        $data1 =$this->db->query('SELECT* FROM company WHERE header_id='.$id);
        $num_rows1=$data1->num_rows();
        $company=$data1->result_array();
        //print_r($array1[1]);
        $array_experience=array();

        for($i=0;$i<$num_rows1;$i++){
            $data2 =$this->db->query('SELECT* FROM experience  WHERE company_id='.$company[$i]['id']);
            $array2=$data2->result_array();
            array_push($array_experience,$array2);
        }
        $com['companies_experience']=array(
          'companies'=>  $company,
          'experience'=> $array_experience
        );
        /*$com['companies']=array(
            'id'=>$array1[0]['id'],
            'header_id'=>$array1[0]['header_id'],
            'city'=>$array1[0]['city'],
            'company_name'=>$array1[0]['company_name'],
            'company_website'=>$array1[0]['company_website']
        );*/


        /*$com['experience']=array(
            'id'=>$array2[0]['id'],
            'header_id'=>$array2[0]['company_id'],
            'start_date'=>$array2[0]['start_date'],
            'end_date'=>$array2[0]['end_date']
        );*/

    //echo '<pre>';
    //print_r($array1);
        return $com;
    }

    public function get_job_titles_given_id($id){
        $data =$this->db->query('SELECT* FROM job_titel  WHERE id='.$id);
        $array=$data->result_array();
        return $array;
    }
    public function get_related_field_given_id($id){
        $data =$this->db->query('SELECT* FROM related_field  WHERE id='.$id);
        $array=$data->result_array();
        return $array;
    }


    public  function  update_user($user_id){

            $this->db->trans_start();
            $this->update_user_table($user_id);
            $this->update_companyInfo($user_id);
            $this->db->trans_complete();
            return true;

    }
    public function update_user_table($id){
        $data = array(
            'title' => $this->input->post('title', TRUE),
            'name' => $this->input->post('name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'phone_number1' => $this->input->post('mobile1', TRUE),
            'phone_number2	' => $this->input->post('mobile2', TRUE),
            'related_field_id' => $this->input->post('Prefe_Ar_To_Contri', TRUE),
            'linkedin' => $this->input->post('linkedin', TRUE),
            'blog' => $this->input->post('blog', TRUE),
            'job_titel_id' => $this->input->post('job_title', TRUE),
            'description' => $this->input->post('description', TRUE)

        );

        $this->db->update('user_details', $data, "id =".$id);
    }
    public function update_companyInfo($id)
    {
        $i_Value=$this->input->post('i_value', TRUE);

        for ($i = 0; $i <= $i_Value; $i++) {
            $data = array(
                'header_id' => $id,
                'company_name' => $this->input->post('company_name[' . $i . ']', TRUE),
                'country' => $this->input->post('country[' . $i . ']', TRUE),
                'city' => $this->input->post('city[' . $i . ']', TRUE),
                'company_website' => $this->input->post('Company_Web_Site[' . $i . ']', TRUE)
            );

            $com_id= $this->input->post('company_id['.$i.']', TRUE);
            if($com_id){
                $this->db->update('company', $data, "id =".$com_id);
                //$id= $this->input->post('id_experience['.$i.'][0]', TRUE);

                $j_value=$this->input->post('j_value[' . $i . ']', TRUE);
                echo '<pre>';
                echo '$j_value i=',$j_value;
                for($j=0;$j<=($j_value);$j++) {

                    $id_experiance= $this->input->post('id_experience['.$i.']['.$j.']', TRUE);
                    if($id_experiance) {
                        echo '<pre>';
                        echo 'Update i=',$i;
                        echo 'j=',$j;
                        $data = array(
                            'company_id' => $com_id,
                            'start_date' => $this->input->post('Start_date[' . $i . '][' . ($j) . ']', TRUE),
                            'end_date' => $this->input->post('End_date[' . $i . '][' . ($j) . ']', TRUE),
                            'description' => $this->input->post('job_status[' . $i . '][' . ($j) . ']', TRUE)
                        );

                        $this->db->update('experience', $data, 'id=' . $id_experiance);
                    }else{
                        echo '<pre>';
                        echo 'extera com_id=',$com_id;
                        echo 'extera i=',$i;
                        echo ' j=',$j;
                        $data = array(
                            'company_id' => $com_id,
                            'start_date' => $this->input->post('Start_date[' . $i . ']['.($j).']', TRUE),
                            'end_date' => $this->input->post('End_date[' . $i . ']['.($j).']', TRUE),
                            'description' => $this->input->post('job_status[' . $i . ']['.($j).']', TRUE)
                        );
                        $this->db->insert('experience',$data);

                    }

                }
            }
            else{
                echo '<pre>';
                echo 'zzzzzq';
                $this->db->insert('company',$data);
                $company_id=$this->db->insert_id();
                $this->experience($company_id,$i);
            }

        }

    }
    public function experience($company_id,$i){

        $j_value=$this->input->post('j_value[' . $i . ']', TRUE);

        for($j=0;$j<=($j_value);$j++) {
            echo '<pre>';
            echo 'i=',$i;
            echo 'j=',$j;
            $data = array(
                'company_id' => $company_id,
                'start_date' => $this->input->post('Start_date[' . $i . ']['.($j).']', TRUE),
                'end_date' => $this->input->post('End_date[' . $i . ']['.($j).']', TRUE),
                'description' => $this->input->post('job_status[' . $i . ']['.($j).']', TRUE)
            );
            $this->db->insert('experience',$data);

        }

    }
    public function delete_Experience_row(){
        //echo 'update_Experiance_table';
        $id= $this->input->post('id', TRUE);
        $this->db->delete('experience', array('id' => $id));

        return true;
    }
    public  function delete_company(){
        $id= $this->input->post('id', TRUE);
        $this->db->delete('company', array('id' => $id));

        return true;
    }



}