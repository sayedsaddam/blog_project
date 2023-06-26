<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Product_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// add product
	public function add_product($data){
		$this->db->insert('products', $data);
		if($this->db->affected_rows() > 0)
			return true;
		return false;
	}
	// get products
	public function get_products($limit, $offset){
		$this->db->select('id, product_name, product_description, product_code, product_qty, price, image, supplier, status, created_at, updated_at');
		$this->db->from('products');
		$this->db->limit($limit, $offset);
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
	}
}
