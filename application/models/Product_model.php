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
}
