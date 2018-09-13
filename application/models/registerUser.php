<?php
class registerUser extends CI_Model
{
    public $id;
    public function register()
    {

        $this->db->trans_start();
        $this->registerInit();
        $this->companyInfo();
        $this->db->trans_complete();

        return true;
    }
    public function registerInit(){
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

        $this->db->insert('user_details',$data);
       $this->id=$this->db->insert_id();
        //return $id;
    }


    public function companyInfo()
    {
        //echo $id;

        $i_Value=$this->input->post('i_value', TRUE);

        for ($i = 0; $i <= $i_Value; $i++) {
            $data = array(
                'header_id' => $this->id,
                'company_name' => $this->input->post('company_name[' . $i . ']', TRUE),
                'country' => $this->input->post('country[' . $i . ']', TRUE),
                'city' => $this->input->post('city[' . $i . ']', TRUE),
                'company_website' => $this->input->post('Company_Web_Site[' . $i . ']', TRUE)
            );
            $this->db->insert('company',$data);
            $company_id=$this->db->insert_id();
            $this->experience($company_id,$i);
        }

    }

    public function experience($company_id,$i){

        //$i_value=$this->input->post('i_value', TRUE);
        echo '<pre>';
        echo '$i=>-------------',$i;
       // for($i=0;$i<=$i_value;$i++){

            $j_value=$this->input->post('j_value[' . $i . ']', TRUE);
            echo '<pre>';
            echo 'j_value=> ',$j_value;


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

        //}
    }


}