<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
       	$this->load->model('Users_model');
        $this->load->database();
        $this->load->helper('url');
    }

	/**
	 * Login Controller
	 */
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('layout/header');
		$this->load->view('register');
	}

	public function create()
	{
		$PST_name=$this->input->post('name');
		$PST_email=$this->input->post('email');
		$PST_password=$this->input->post('password');
		$date=date('Y-m-d H:i:s');
		$user=$this->Users_model->create_user($PST_name,$PST_email,$PST_password,$date);
		redirect(base_url());

	}

}
