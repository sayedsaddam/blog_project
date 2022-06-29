<?php defined('BASEPATH') OR exit('No direct script access allowed!');

/**
 * undocumented class
 */
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index(){
      $this->load->view('login');
   }
	public function signin(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$login = $this->login_model->login($username, $password);
		if($login > '0'){
			$id = $login->id;
			$username = $login->username;
			$fullname = $login->fullname;
			$role = $login->role;
			$this->session->set_userdata(array(
				'id' => $id,
				'username' => $username,
				'fullname' => $fullname,
				'role' => $role
			));
			$this->login_model->update_logged_in($login->id);
			redirect('admin');
		}else{
			$this->session->set_flashdata('failed', '<strong>Sorry!</strong> Username or password incorrect, please try again!');
			redirect('login/index');
		}
	}
	// terminate session and logout
	public function signout(){
		$this->login_model->update_logged_in($this->session->userdata('id'));
		$this->session->sess_destroy();
		redirect('login/index');
	}
}
