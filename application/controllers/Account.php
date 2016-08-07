<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

	public function index()
	{
		$this->load->view('news');
	}

	public function view($page = 'home')
    {
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function signup($action = "view")
    {
        $this->load->library('form_validation', 'session');
        $this->load->helper('form', 'url');

    	if($this->input->post('username')){
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('role', 'Role', 'required');
	        
            if ($this->form_validation->run() === FALSE){
                redirect('account/login', 'refresh');
                 
            }
            else{
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $name = $this->input->post('name');
                $role = $this->input->post('role');

                $this->load->model('Credential');
                $this->load->model('User');

                $data = array(
                    'name' => $name,
                    'role_id' => $role,
                    'created' => date('Y-m-d H:i:s')
                );
                $user_id = $this->User->add($data);

                $credential_id = 0;

                if($user_id){
                    $data = array(
                        'email' => $email,
                        'username' => $username,
                        'password' => $password,
                        'user_id' => $user_id,
                        'created' => date('Y-m-d H:i:s')
                    );
                    $credential_id = $this->Credential->add($data);
                    if($credential_id){
                        $_SESSION['signup_status'] = true;
                        redirect('account/login', 'refresh');
                    }
                }
                else{
                    $_SESSION['signup_status'] = false;
                }
                
            }
        }
        if($action == 'view')
        {
            $this->load->view('templates/signup_header');
            $this->load->view('account/signup');
            $this->load->view('templates/footer');
        }
    	else
    	{
    		//to do: get role type and redirect accordingly 
    		redirect(base_url().'student/myProfile');	
    	}

    }

    public function login($action = "view")
    {
        $this->load->library('form_validation', 'session');
    	$this->load->model('Credential');

    	if($action == "view"){
	        $this->load->view('templates/login_header');
	        $this->load->view('account/login');
	        $this->load->view('templates/footer');
        }
        else
        {
        	//to do: get role type and redirect accordingly 
        	// echo site_url('student/myProfile');
        	redirect('/student/myProfile','refresh'	);	
        }

    }
    public function edit_to_bcrypt($id = 1)
    {
    	$this->load->model('account_model');
	    $account = $this->account_model->get_password($id);
	    $data['username'] = $account['username'];
	    $data['password'] = $account['password'];
	    $data['id'] = $id;
	    $data['hash'] = $this->bcrypt->hash_password($data['password']);
	    $data['reversed_password'] = $this->bcrypt->check_password($data['password'], $data['hash']);

        // $this->load->view('templates/header', $data);
        $this->load->view('account/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    public function updatePassword()
    {
    	$this->load->model('account_model');
    	$account = $this->account_model->update_password();
    }
    public function logout()
    {
        session_destroy();
         redirect('account/login', 'refresh');
    }

}
