<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model(array('admin_model'));
		if(!$this->session->userdata('username')){
			redirect('');
		}
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
	// list articles > published articles
	public function articles($offset = null){
		$limit = 10;
		$data['title'] = 'Articles &raquo; WatchZone';
		$data['body'] = 'admin/articles';
		$data['articles'] = $this->admin_model->list_articles($limit, $offset);
		$this->load->view('components/template', $data);
	}
	// list articles > trashed / unpublished articles
	public function trashed_articles($offset = null){
		$limit = 10;
		$data['title'] = 'Trashed Articles &raquo; WatchZone';
		$data['body'] = 'admin/trashed_articles';
		$data['articles'] = $this->admin_model->trashed_articles($limit, $offset);
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
		$config = array(
			'upload_path' => './attachments/',
			'allowed_types' => 'jpg|png|jpeg|webp',
			'overwrite' => true,
			'encrypt_name' => false,
			'file_name' => 'article_'.time()
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('attachment')){
			$data = $this->upload->data();
			$image = $data['file_name']; // get the attachment name
		}else{		
			echo $this->upload->display_errors(); // display errors if any
		}
		$title = $this->input->post('title');
		$slug = url_title($title, 'dash', TRUE);
		$content = trim($this->input->post('content'));
		$data = array(
			'title' => $title,
			'slug' => $slug,
			'blog_description' => $content,
			'attachment' => $image,
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
			'updated_by' => $this->session->userdata('id'),
			'published_from' => $this->input->ip_address(),
			'updated_at' => date('Y-m-d H:i:s'),
		);
		if($this->admin_model->update_article($id, $data)){
			$this->session->set_flashdata('success', '<strong>Success!</strong> Article has been updated successfully!');
			redirect('admin/articles');
		}else{
			$this->session->set_flashdata('failed', '<strong>Failed!</strong> Something went wrong, please try again!');
			redirect('admin/article/'.$slug);
		}
	}
	// update article status > published/unpublished
	public function delete_article($id){
		if($this->admin_model->delete_article($id)){
			// $this->session->set_flashdata('success', '<strong>Success!</strong> Article has been deleted successfully!');
			redirect('admin/articles');
		}else{
			// $this->session->set_flashdata('failed', '<strong>Failed!</strong> Something went wrong, please try again!');
			redirect('admin/articles');
		}
	}
}
