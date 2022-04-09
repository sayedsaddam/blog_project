<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function blog(){
		$data['title'] = 'Blog &raquo; WatchZone';
		$data['body'] = 'blog';
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
