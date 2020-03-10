<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_table_post_responses extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'id' => array(
                 'type' => 'INT',
                 'constraint' => 5,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'user_id' => array(
                 'type' => 'INT',
                 'null' => false,
              ),
              'post_id' => array(
                 'type' => 'INT',
                 'null' => false,
              ),
              'comment' => array(
                 'type' => 'TEXT',
                 'null' => false,
              ),
              'status' => array(
                 'type' => 'INT',
                 'null' => true,
                 'constraint' => 1,
                 'default' => 1,
              ),
              'created_at' => array(
                 'type' => 'TIMESTAMP',
                 'null' => true,
              ),
              'updated_at' => array(
                 'type' => 'TIMESTAMP',
                 'null' => true,
              ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('post_responses');
    }

    public function down()
    {
        $this->dbforge->drop_table('post_responses');
    }
}