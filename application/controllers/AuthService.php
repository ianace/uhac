<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthService extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form', 'url');
        $this->load->model('Credential');
    }

    public function index(){        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean', array('required' => 'You must provide a valid username or email address.'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() === FALSE){
            redirect('account/login', 'refresh');
        }
        else{
            $username $this->input->post

            $this->load->model('Credential');
            $result = $this->Credential->auth('tonix15', 'asdf');
            echo '<pre>';
            print_r($result);
            echo '</pre>';
            exit;
        }
    }
}
