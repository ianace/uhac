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
        $this->load->view('templates/header2');
        $this->load->view('student/myLessons');
        $this->load->view('templates/footer');
    }

    public function myProfile($action = "view")
    {
        $data['name'] = $_SESSION['fullname'];
        $this->load->view('templates/header2');
        $this->load->view('student/myProfile',$data);
        $this->load->view('templates/footer');
    }
}
