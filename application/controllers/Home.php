<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('admin_model', 'product_model'));
		$this->load->helper('paginate');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($offset = null){
		$limit = 8;
		$data['title'] = 'Home &raquo; WatchZone';
		$data['body'] = 'home';
		$data['products'] = $this->product_model->get_products($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// blog page
	public function blog($offset = null){
		$limit = 10;
		$url = 'home/blog';
		$rowscount = $this->admin_model->total_articles();
		paginate($url, $rowscount, $limit);
		$data['title'] = 'Blog &raquo; WatchZone';
		$data['body'] = 'blog';
		$data['articles'] = $this->admin_model->list_articles($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// search articles
	public function search_blog(){
		$search = trim($this->input->get('search'));
		$data['title'] = 'Search Results &raquo; WatchZone';
		$data['body'] = 'blog';
		$data['results'] = $this->admin_model->search_articles($search);
		$this->load->view('components/template', $data);
	}
	// blog details page
	public function blog_detail($slug, $offset = null){
		$limit = 3;
		$data['title'] = 'Blog Details &raquo; WatchZone';
		$data['body'] = 'blog_detail';
		$data['article'] = $this->admin_model->get_article($slug);
		$data['articles'] = $this->admin_model->list_articles($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// about page
	public function about(){
		$data['title'] = 'About &raquo; WatchZone';
		$data['body'] = 'about';
		$this->load->view('components/template', $data);
	}
	// products
	public function products($offset = null){
		$limit = 12;
		$url = 'home/products';
		$rowscount = $this->product_model->total_products();
		paginate($url, $rowscount, $limit);
		$data['title'] = 'Products &raquo; WatchZone';
		$data['body'] = 'products';
		$data['products'] = $this->product_model->get_products($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// view product page
	public function product_detail($id){ // product id will be passed as parameter
		$data['title'] = 'Product Detail &raquo; WatchZone';
		$data['body'] = 'product_detail';
		$data['product'] = $this->product_model->get_product($id);
		$this->load->view('components/template', $data);
	}
	// categories > loser.com
	public function losers(){
		$data['title'] = 'Losers &raquo; WatchZone';
		$data['body'] = 'losers';
		$this->load->view('components/template', $data);
	}
	// alpinejs
	public function alpinejs(){
		$this->load->view('alpinejs');
	}
}
