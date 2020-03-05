<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

		if(empty($this->session->user))
		{
			redirect(base_url());
		}
		$data['user']=$this->session->user;
		$this->load->view('layout/header_v',$data);
		$this->load->view('layout/menu_v',$data);
		$this->load->view('home_v',$data);
		$this->load->view('layout/footer_v',$data);


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
	public function login()
	{
		$PST_email = $this->security->xss_clean(strip_tags($this->input->post('email')));
		$PST_password = $this->security->xss_clean(strip_tags($this->input->post('password')));


		$user=$this->Users_model->login($PST_email, $PST_password);
			//$user['success']
		if (!empty($user['success']))
		{
			redirect(base_url()."/Home/welcome");
		}else{
			$data['message']=$user['message'];
			$this->load->view('layout/header');
			$this->load->view('login',$data);

		}

		//$date=date('Y-m-d H:i:s');
		//$user=$this->Users_model->create_user($PST_name,$PST_email,$PST_password,$date);
		//redirect(base_url());

	}
	public function logout()
	{
		$this->session->sess_destroy();
        session_destroy();
        redirect(base_url()."index.php/Principal");
	}

}
