<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		session_start();

	}
    public function myLessons($action = "view")
    {
        $data['name'] = $_SESSION['fullname'];
        $this->load->view('templates/header2');
        $this->load->view('teacher/myLessons',$data);
        $this->load->view('templates/footer');
    }

    public function myProfile($action = "view")
    {
        if($this->input->post('action') != false)
        {
            $action = $this->input->post('action');
        }
        
        if($action == 'view')
        {
            $data['name'] = $_SESSION['fullname'];
            $this->load->view('templates/header2');
            $this->load->view('teacher/myProfile',$data);
            $this->load->view('templates/footer');
        }
        else
        {

        }
    	
    }
}
