<?php defined('BASEPATH') OR exit('No direct script access allowed!');
class Migration_Create_blog_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
			),
			'blog_description' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp',
			'status' => array(
				'type' => 'tinyint',
				'constraint' => '1'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('blog');
	}
	public function down(){
		$this->dbforge->drop_table('blog');
	}
}
