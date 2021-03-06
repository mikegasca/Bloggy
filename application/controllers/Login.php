<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
       	$this->load->model('Users_model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

	/**
	 * Login Controller
	 */
	public function index()
	{
		if(!empty($this->session->user))
		{
			redirect(base_url()."Home");
		}else{
			$this->load->view('layout/header_v');
			$this->load->view('login_v');
		}

	}
	public function register()
	{
		$this->load->view('layout/header_v');
		$this->load->view('register_v');
	}

	public function create()
	{
		$PST_name=$this->security->xss_clean(strip_tags($this->input->post('name')));
		$PST_email=$this->security->xss_clean(strip_tags($this->input->post('email')));
		$PST_password=$this->security->xss_clean(strip_tags($this->input->post('password')));
		$date=date('Y-m-d H:i:s');
		$user=$this->Users_model->create_user($PST_name,$PST_email,$PST_password,$date);

		redirect(base_url());

	}
	public function login()
	{
		$PST_email = $this->security->xss_clean(strip_tags($this->input->post('email')));
		$PST_password = $this->security->xss_clean(strip_tags($this->input->post('password')));

		$user=$this->Users_model->login($PST_email, $PST_password);

		if (!empty($user['success']))
		{
			redirect(base_url()."Home");
		}else{
			$data['message']=$user['message'];
			$data['message_alert']='danger';
			$this->load->view('layout/header_v');
			$this->load->view('login_v',$data);
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
        session_destroy();
        redirect(base_url());
	}

}
