<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
		$this->load->helper('paginate');
	}
	public function index(){
		$data['title'] = 'Products &raquo; WatchZone';
		$data['body'] = 'products';
		// $data['products'] = $this->Product_model->list_products();
		$this->load->view('components/template', $data);
	}
	// create product > go to the form
	public function create_product($offset = null){
		$limit = 3;
		$data['title'] = 'Add Product &raquo; WatchZone';
		$data['body'] = 'admin/products/add_product';
		$data['products'] = $this->product_model->get_products($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// store product information
	public function store_product(){
		$config = array(
			'upload_path' => './attachments/products/',
			'allowed_types' => 'jpg|png|jpeg|webp',
			'overwrite' => true,
			'encrypt_name' => false,
			'file_name' => 'product_'.time()
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){
			$data = $this->upload->data();
			$imageName = $data['file_name']; // get the attachment name
		}else{		
			echo $this->upload->display_errors(); // display errors if any
		}
		$data = array(
			'added_by' => $this->session->userdata('id'),
			'product_name' => $this->input->post('name'),
			'product_description' => $this->input->post('description'),
			'product_code' => $this->input->post('code'),
			'product_qty' => $this->input->post('quantity'),
			'price' => $this->input->post('price'),
			'image' => $imageName,
			'supplier' => $this->input->post('supplier')
 		);
		if($this->product_model->add_product($data)){
			$this->session->set_flashdata('success', '<strong>Success! </strong>Product has been added successfully.');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('failed', '<strong>Failed! </strong>Prduct was not added, please try again.');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	// list products
	public function products($offset = null){
		$limit = 15;
		$url = 'product/products';
		$rowscount = $this->product_model->total_products();
		paginate($url, $rowscount, $limit);
		$data['title'] = 'List Products &raquo; WatchZone';
		$data['body'] = 'admin/products/products';
		$data['products'] = $this->product_model->get_products($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// trashed products
	public function trashed_products($offset = null){
		$limit = 15;
		$url = 'product/trashed_products';
		$rowscount = $this->product_model->total_products();
		paginate($url, $rowscount, $limit);
		$data['title'] = 'List Products &raquo; WatchZone';
		$data['body'] = 'admin/products/trashed_products';
		$data['products'] = $this->product_model->trashed_products($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// get product for edit
	public function product($id){
		$data['title'] = 'Product &raquo; WatchZone';
		$data['body'] = 'admin/products/add_product';
		$data['product'] = $this->product_model->get_product($id);
		$this->load->view('components/template', $data);
	}
	// update product info
	public function update_product(){
		$id = $this->input->post('id');
		$data = array(
			'product_name' => $this->input->post('name'),
			'product_description' => $this->input->post('description'),
			'product_code' => $this->input->post('code'),
			'product_qty' => $this->input->post('quantity'),
			'price' => $this->input->post('price'),
			'supplier' => $this->input->post('supplier'),
			'updated_at' => date('Y:m:d H:i:s')
 		);
		 if($this->product_model->update_product($id, $data)){
			$this->session->set_flashdata('success', '<strong>Success! </strong>Product has been updated successfully.');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('failed', '<strong>Failed! </strong>Prduct was not updated, please try again.');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	// delete product
	public function delete_product($id){
		if($this->product_model->delete_product($id)){
			// sweet alert will display the message, not need for bootstrap alert
			redirect('product/index');
		}else{
			redirect('product/index');
		}
	}
}
