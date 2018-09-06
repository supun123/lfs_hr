<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function register_volunteers()
    {
        echo "register_volunteers";
        $this->load->model('user_model');
        $responce=$this->user_model->registerUser();
        if($responce){
            //$this->session->set_flashdata('msg','registered successfully');
            //redirect('Home/index');
        }
        else{
            //$this->session->set_flashdata('msg','something went wrong');
            //redirect('Home/index');
        }
    }
}
