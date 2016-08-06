<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
        $this->load->view('templates/header2');
        $this->load->view('account/signup');
        $this->load->view('templates/footer');
    }

    public function login($action = "view")
    {
        $this->load->view('templates/header2');
        $this->load->view('account/login');
        $this->load->view('templates/footer');
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


}
