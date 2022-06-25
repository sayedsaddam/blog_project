<?php defined('BASEPATH') OR exit('No direct script access allowed!');
class Migration_Create_users_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'fullname' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => TRUE
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => TRUE
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
			),
			'role' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
			),
			'status' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => 1
			),
			'logged_in' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => 0
			),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp'
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');
	}
	public function down(){
		$this->dbforge->drop_table('users');
	}
}
