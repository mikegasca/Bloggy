<?php

class Users_model extends CI_Model
{

    function __construct()
    {
         // Llamar al constructor de CI_Model
         parent::__construct();

    }
    function create_user($PST_name,$PST_email,$PST_password,$date)
    {
    	$user=$this->db->insert('users',array('name'=>$PST_name, 'email' => $PST_email, 'password' => $PST_password, 'created_at' => $date));
    }
    public function login($email,$password)
    {
        $query=$this->db->where('email',$email)->where('status',1)
                 ->from('users')->get();

        $result = $query->result_array();
        if(!empty($result[0]['id']))
        {
        	if($result[0]['password'] === $password)
	        {
	        	$data = array
	                (
	                    'email' => $result[0]['email'],
	                    'id' => $result[0]['id'],
	                    'name' => $result[0]['name'],
	                    'status' => $result[0]['status']
	                );

	            session_start();
	            $user=$this->db->update('users',array('last_login'=>date('Y-m-d H:i:s')));
	            $this->session->user=$data;
	            $response = array
	                (
	            		'success' => true
	                );
	            return $response;

	        }else{
	        	$response = array
                (
            		'success' => false,
            		'message' => 'Wrong password',
                );
	            return $response;
	        }

        }else{
        	$response = array
            (
        		'success' => false,
        		'message' => 'Username does not exist',
            );
            return $response;
        }

    }
}