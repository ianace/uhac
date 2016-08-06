<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

    public function myLessons($action = "view")
    {
        $this->load->view('templates/header2');
        $this->load->view('student/myLessons');
        $this->load->view('templates/footer');
    }

    public function myProfile($action = "view")
    {
        $this->load->view('templates/header2');
        $this->load->view('student/myProfile');
        $this->load->view('templates/footer');
    }
}
