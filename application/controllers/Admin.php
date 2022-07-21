<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model(array('admin_model'));
	}
	// admin dashboard
	public function index($offset = null){
		$limit = 1000000;
		// echo $this->input->ip_address();
		$data['title'] = 'Dashboard &raquo; WatchZone';
		$data['body'] = 'admin/dashboard';
		$data['articles'] = count($this->admin_model->list_articles($limit, $offset));
		$this->load->view('components/template', $data);
	}
	// list articles
	public function articles($offset = null){
		$limit = 10;
		$data['title'] = 'Articles &raquo; WatchZone';
		$data['body'] = 'admin/articles';
		$data['articles'] = $this->admin_model->list_articles($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// add article
	public function add_article($offset = null){
		$limit = 2;
		$data['title'] = 'Add Article &raquo; WatchZone';
		$data['body'] = 'admin/add_article';
		$data['articles'] = $this->admin_model->list_articles($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// publish article
	public function publish_article(){
		$title = $this->input->post('title');
		$slug = url_title($title, 'dash', TRUE);
		$content = trim($this->input->post('content'));
		$data = array(
			'title' => $title,
			'slug' => $slug,
			'blog_description' => $content,
			'added_by' => $this->session->userdata('id'),
			'published_from' => $this->input->ip_address(),
		);
		if($this->admin_model->add_article($data)){
			$this->session->set_flashdata('success', '<strong>Success!</strong> Article has been published successfully!');
			redirect('admin/articles');
		}else{
			$this->session->set_flashdata('failed', '<strong>Failed!</strong> Something went wrong, please try again!');
			redirect('admin/add_article');
		}
	}
	// get article for edit
	public function article($slug, $offset = null){
		$limit = 2;
		$data['title'] = 'Article &raquo; WatchZone';
		$data['body'] = 'admin/add_article';
		$data['article'] = $this->admin_model->get_article($slug); // edit article
		$data['articles'] = $this->admin_model->list_articles($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// update article (edit)
	public function update_article(){
		$id = $this->input->post('blog_id');
		$title = $this->input->post('title');
		$slug = url_title($title, 'dash', TRUE);
		$content = trim($this->input->post('content'));
		$data = array(
			'title' => $title,
			'slug' => $slug,
			'blog_description' => $content,
			'added_by' => $this->session->userdata('id'),
			'published_from' => $this->input->ip_address(),
		);
		if($this->admin_model->update_article($id, $data)){
			$this->session->set_flashdata('success', '<strong>Success!</strong> Article has been updated successfully!');
			redirect('admin/articles');
		}else{
			$this->session->set_flashdata('failed', '<strong>Failed!</strong> Something went wrong, please try again!');
			redirect('admin/article/'.$slug);
		}
	}
}
