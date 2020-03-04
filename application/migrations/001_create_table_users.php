<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_table_users extends CI_Migration
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
              'name' => array(
                 'type' => 'VARCHAR',
                 'constraint' => '100',
                 'null' => false,
              ),
              'password' => array(
                 'type' => 'TEXT',
                 'null' => false,
              ),
              'email' => array(
                 'type' => 'TEXT',
                 'null' => false,
              ),
              'token' => array(
                 'type' => 'TEXT',
                 'null' => true,
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

              'last_login' => array(
                 'type' => 'TIMESTAMP',
                 'null' => true,
              ),
           )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}