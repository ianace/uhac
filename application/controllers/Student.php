<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        session_start();

    }
    public function myLessons($action = "view")
    {
        if(isset($_SESSION['id'])){
            $this->load->model('User');
            $id = $_SESSION['id'];
            $obj = $this->User->getUserInfo($id);            
            $data['email'] = $obj['email'];
            $data['name'] = $obj['fullname'];
        }
        $this->load->view('templates/header2');
        $this->load->view('student/myLessons', $data);
        $this->load->view('templates/footer');
    }

    public function myProfile($action = "view")
    {
        if(isset($_SESSION['id'])){
            $this->load->model('User');
            $id = $_SESSION['id'];
            $obj = $this->User->getUserInfo($id);
            $data['email'] = $obj['email'];
        }
        $data['name'] = $_SESSION['fullname'];
        $this->load->view('templates/header2');
        $this->load->view('student/myProfile',$data);
        $this->load->view('templates/footer');
    }
}
