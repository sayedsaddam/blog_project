<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
	}
	public function index(){
		$data['title'] = 'Products &raquo; WatchZone';
		$data['body'] = 'products';
		// $data['products'] = $this->Product_model->list_products();
		$this->load->view('components/template', $data);
	}
	// create product > go to the form
	public function create_product(){
		$data['title'] = 'Add Product &raquo; WatchZone';
		$data['body'] = 'admin/products/create-product';
		$this->load->view('components/template', $data);
	}
}
