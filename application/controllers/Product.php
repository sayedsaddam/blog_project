<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
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
}
