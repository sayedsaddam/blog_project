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
	// count products
	public function total_products(){
		return $this->db->count_all('products');
	}
	// get products
	public function get_products($limit, $offset){
		$this->db->select('id, product_name, product_description, product_code, product_qty, price, image, supplier, status, created_at, updated_at');
		$this->db->from('products');
		$this->db->limit($limit, $offset);
		$this->db->where('status', 1);
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
	}
	// trashed products
	public function trashed_products($limit, $offset){
		$this->db->select('id, product_name, product_description, product_code, product_qty, price, image, supplier, status, created_at, updated_at');
		$this->db->from('products');
		$this->db->limit($limit, $offset);
		$this->db->where('status', 0);
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
	}
	// get product > single product by id
	public function get_product($id){
		$this->db->select('id, product_name, product_description, product_code, product_qty, price, image, supplier');
		$this->db->from('products');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}
	// update product
	public function update_product($id, $data){
		$this->db->where('id', $id);
		$this->db->update('products', $data);
		return true;
	}
	// delete product
	public function delete_product($id){
		$this->db->query("UPDATE products SET `status` = NOT `status` WHERE id=$id");
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	// get products
	public function search_products($keyword){
		$this->db->select('id, product_name, product_description, product_code, product_qty, price, image, supplier, status, created_at, updated_at');
		$this->db->from('products');
		$this->db->like('product_name', $keyword);
		$this->db->or_like('product_code', $keyword);
		$this->db->or_like('price', $keyword);
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
	}
}
