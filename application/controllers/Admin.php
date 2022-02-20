<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	// admin dashboard
	public function index(){
		$data['title'] = 'Dashboard &raquo; AgroLabs';
		$data['body'] = 'admin/dashboard';
		$this->load->view('components/template', $data);
	}
	// list articles
	public function articles(){
		$data['title'] = 'Articles &raquo; AgroLabs';
		$data['body'] = 'admin/articles';
		$this->load->view('components/template', $data);
	}
	// add article
	public function add_article(){
		$data['title'] = 'Add Article &raquo; AgroLabs';
		$data['body'] = 'admin/add_article';
		$this->load->view('components/template', $data);
	}
	// publish article
	public function publish_article(){
		$title = $this->input->post('title');
		$slug = url_title($title, 'dash', TRUE);
		echo $slug; // this is for testing
	}
}
