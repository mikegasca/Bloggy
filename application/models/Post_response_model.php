<?php

class Post_response_model extends CI_Model
{

    function __construct()
    {
         // Llamar al constructor de CI_Model
         parent::__construct();

    }
    function create($PST_post_id,$usuario_id,$PST_comment,$date)
    {
    	$user=$this->db->insert('post_responses',array('post_id'=>$PST_post_id, 'user_id' => $usuario_id, 'comment' => $PST_comment, 'created_at' => $date));
    }
    function view_comments($id)
    {
    	$query=$this->db->where('status',1)->where('post_id',$id)
                 ->from('post_responses')->get();
        $result = $query->result_array();
        for ($i=0; $i<sizeof($result); $i++) {

            $query=$this->db->select('name')->where('id',$result[$i]['user_id'])
                 ->from('users')->get();
                  $user = $query->result_array();
            $result[$i]['usuario']=$user[0]['name'];
        }

        return $result;
    }

}