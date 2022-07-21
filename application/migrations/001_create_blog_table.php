<?php defined('BASEPATH') OR exit('No direct script access allowed!');
class Migration_Create_blog_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => 100
			),
			'blog_description' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'added_by' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'updated_by' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'status' => array(
				'type' => 'tinyint',
				'constraint' => 1
			),
			'published_from' => array( // IP address
				'type' => 'VARCHAR',
				'constraint' => 100
			),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp',
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('blog');
	}
	public function down(){
		$this->dbforge->drop_table('blog');
	}
}
