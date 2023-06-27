<?php defined('BASEPATH') OR exit('No direct script access allowed!');
class Migration_Create_orders_table extends CI_Migration{
	public function up(){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'product_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'customer_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'customer_email' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'phone' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			),
			'address' => array(
				'type' => 'TEXT',
				'null' => FALSE
			),
			'status' => array(
				'type' => 'tinyint',
				'constraint' => 1
			),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp',
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('orders');
	}
	public function down(){
		$this->dbforge->drop_table('orders');
	}
}
