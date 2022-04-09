<?php defined('BASEPATH') OR exit('No direct script access allowed!');

/**
 * undocumented class
 */
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	public function index(){
      echo 'Login to access the dashboard!';
    }
}
