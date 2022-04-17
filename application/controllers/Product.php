<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * undocumented class
 */
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
	}
	public function index(){
		$products = array('Citizen', 'Sieko5', 'G-Shock', 'Rado', 'KWC', 'Casio');
		foreach($products as $product){
			echo '<h2>'.$product.'</h2>';
		}
	}
}
