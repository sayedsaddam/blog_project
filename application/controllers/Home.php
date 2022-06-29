<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('admin_model'));
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
	public function index(){
		$data['title'] = 'Home &raquo; WatchZone';
		$data['body'] = 'home';
		$this->load->view('components/template', $data);
	}
	// blog page
	public function blog($offset = null){
		$limit = 10;
		$data['title'] = 'Blog &raquo; WatchZone';
		$data['body'] = 'blog';
		$data['articles'] = $this->admin_model->list_articles($limit, $offset);
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
	// view product page
	public function product_detail(){ // product id will be passed as parameter
		$data['title'] = 'Product Detail &raquo; WatchZone';
		$data['body'] = 'product_detail';
		$this->load->view('components/template', $data);
	}
	// categories > loser.com
	public function losers(){
		$data['title'] = 'Losers &raquo; WatchZone';
		$data['body'] = 'losers';
		$this->load->view('components/template', $data);
	}
}
