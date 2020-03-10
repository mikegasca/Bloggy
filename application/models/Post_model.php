<?php

class Post_model extends CI_Model
{

    function __construct()
    {
         // Llamar al constructor de CI_Model
         parent::__construct();

    }
    function create($PST_title,$PST_image,$PST_content,$date,$usuario_id)
    {

    	$user=$this->db->insert('post',array('title'=>$PST_title, 'user_id' => $usuario_id, 'image' => $PST_image, 'content' => $PST_content, 'created_at' => $date));
    }
    public function last_post()
    {
        $query=$this->db->where('status',1)
                 ->from('post')->order_by('id','desc')->limit(10)->get();

        $result = $query->result_array();
        for ($i=0; $i<sizeof($result); $i++) {

            $query=$this->db->select('name')->where('id',$result[$i]['user_id'])
                 ->from('users')->get();
                  $user = $query->result_array();
            $result[$i]['usuario']=$user[0]['name'];

            $query=$this->db->where('post_id',$result[$i]['id'])
                 ->from('post_responses');
                  $coments = $this->db->count_all_results();
            $result[$i]['coments']=$coments;
        }

        return $result;


    }
    public function view_post($id)
    {
        $query=$this->db->where('status',1)->where('id',$id)
                 ->from('post')->get();
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