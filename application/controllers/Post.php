<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

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
		$this->load->view('layout/header_v',$data);
		$this->load->view('layout/menu_v',$data);
		$this->load->view('home_v',$data);
		$this->load->view('layout/footer_v',$data);


	}
	public function new()
	{
		if(empty($this->session->user))
		{
			redirect(base_url());
		}
		$data['user']=$this->session->user;
		$this->load->view('layout/header_v',$data);
		$this->load->view('layout/menu_v',$data);
		$this->load->view('create_post_v',$data);
		$this->load->view('layout/footer_v',$data);

	}


	public function create()
	{
		$PST_image ='image';
        $config['upload_path'] = "assets/imagenes/post";
        $config['file_name'] = time()."post";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "20000"; //kb
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);


		$PST_title=$this->input->post('title');
		$PST_content=$this->input->post('textarea');
		$date=date('Y-m-d H:i:s');
		$usuario_id=$this->session->user['id'];

		if (!$this->upload->do_upload($PST_image)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }else{
        	$file_info = $this->upload->data();
        	$PST_image=$file_info['file_name'];

        }

		$user=$this->Post_model->create($PST_title,$PST_image,$PST_content,$date,$usuario_id);
		redirect(base_url().'Home');

	}
	public function view($id)
	{

		if(empty($this->session->user))
		{
			redirect(base_url());
		}

		$data['posts']=$this->Post_model->view_post($id);
		$data['comments']=$this->Post_response_model->view_comments($id);
		$data['user']=$this->session->user;
		$this->load->view('layout/header_v',$data);
		$this->load->view('layout/menu_v',$data);
		$this->load->view('view_post_v',$data);
		$this->load->view('layout/footer_v',$data);
	}
	public function comment()
	{

		if(empty($this->session->user))
		{
			redirect(base_url());
		}

		$PST_comment=$this->input->post('comment');
		$PST_post_id=$this->input->post('post_id');

		$date=date('Y-m-d H:i:s');
		$usuario_id=$this->session->user['id'];

		$user=$this->Post_response_model->create($PST_post_id,$usuario_id,$PST_comment,$date);
		redirect(base_url().'Post/view/'.$PST_post_id);
	}

}
