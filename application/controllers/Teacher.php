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
<<<<<<< HEAD
        $data['name'] = $_SESSION['fullname'];
        $this->load->view('templates/header2');
        $this->load->view('teacher/myLessons',$data);
=======
        if(isset($_SESSION['id'])){
            $this->load->model('User');
            $id = $_SESSION['id'];
            $obj = $this->User->getUserInfo($id);            
            $data['email'] = $obj['email'];
            $data['name'] = $obj['fullname'];
        }
        $this->load->view('templates/header2');
        $this->load->view('teacher/myLessons', $data);
>>>>>>> 3e206b1acae69af03387fd43bc267c53cb51ee27
        $this->load->view('templates/footer');
    }

    public function myProfile($action = "view")
    {
<<<<<<< HEAD
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
    	
=======
    	if(isset($_SESSION['id'])){
            $this->load->model('User');
            $id = $_SESSION['id'];
            $obj = $this->User->getUserInfo($id);            
            $data['email'] = $obj['email'];
            $data['name'] = $obj['fullname'];
        }
        $this->load->view('templates/header2');
        $this->load->view('teacher/myProfile',$data);
        $this->load->view('templates/footer');
>>>>>>> 3e206b1acae69af03387fd43bc267c53cb51ee27
    }
}
