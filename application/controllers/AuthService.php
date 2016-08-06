<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthService extends CI_Controller {
    public function __construct(){
        parent::__construct();
        session_start();
        $this->load->library('form_validation', 'session');
        $this->load->helper('form', 'url');
        $this->load->model('Credential');
    }

    public function index(){        
        /*$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean', array('required' => 'You must provide a valid username.'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');*/
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');


        if ($this->form_validation->run() === FALSE){
            redirect('account/login', 'refresh');
             
        }
        else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Credential');
            $result = $this->Credential->auth($username, $password);


            if($result){
                $user_info = $this->Credential->user_info($username);
                
                $_SESSION['id'] = $user_info['id'];
                $_SESSION['username'] = $user_info['username'];
                $_SESSION['fullname'] = $user_info['fullname'];
                $_SESSION['role'] = $user_info['role'];

                switch ($_SESSION['role']) {
                    case 'root':
                        # code...
                        redirect('account/login', 'refresh');
                        break;
                    case 'mentor':
                        redirect('teacher/myProfile', 'refresh');
                        break;
                        
                    case 'student':
                        redirect('student/myProfile', 'refresh');
                        break;
                    default:
                        # code...
                        redirect('account/login', 'refresh');
                        break;
                }
            }
        }
    }
}
