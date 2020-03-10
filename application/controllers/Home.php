<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
       	$this->load->model('Users_model');
       	$this->load->model('Post_model');
       	$this->load->model('Post_response_model');
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
		$data['posts']=$this->Post_model->last_post();

		$this->load->view('layout/header_v',$data);
		$this->load->view('layout/menu_v',$data);
		$this->load->view('home_v',$data);
		$this->load->view('layout/footer_v',$data);

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
