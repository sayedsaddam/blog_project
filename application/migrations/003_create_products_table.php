<?php defined('BASEPATH') OR exit('No direct script access allowed!');
class Migration_Create_products_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'added_by' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'product_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'product_description' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'product_code' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'product_qty' => array(
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE
			),
			'price' => array(
				'type' => 'DOUBLE(10, 2)',
				'null' => FALSE
			),
			'image' => array( // featured / cover image
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'supplier' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'status' => array(
				'type' => 'tinyint',
				'constraint' => 1
			),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp',
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');
	}
	public function down(){
		$this->dbforge->drop_table('products');
	}
}
