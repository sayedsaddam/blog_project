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
		echo 'admin dashboard';
	}
}
