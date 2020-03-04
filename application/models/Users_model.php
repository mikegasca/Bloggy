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
}