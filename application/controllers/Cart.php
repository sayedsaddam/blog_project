<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Cart extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}
	public function index(){
		if(!$this->session->has_userdata('cart')){
			redirect('products');
		}
		$data['items'] = array_values(unserialize($this->session->userdata('cart')));
		$data['total'] = $this->total();
		$data['title'] = 'Cart &raquo; WatchZone';
		$data['body'] = 'admin/products/cart';
		$this->load->view('components/template', $data);
	}
	public function buy($id){
		$product = $this->product_model->get_product($id);
		$item = array(
			'id' => $product->id,
			'name' => $product->product_name,
			'code' => $product->product_code,
			'photo' => $product->image,
			'price' => $product->price,
			'qty' => $product->product_qty
		);
		if(!$this->session->has_userdata('cart')){
			$cart = array($item);
			$this->session->set_userdata('cart', serialize($cart));
		}else{
			$index = $this->exists($id);
			$cart = array_values(unserialize($this->session->userdata('cart')));
			if($index == -1){
				array_push($cart, $item);
				$this->session->set_userdata('cart', serialize($cart));
			}else{
				$cart[$index]['qty']++;
				$this->session->set_userdata('cart', serialize($cart));
			}
		}
		redirect('cart');
	}
	public function remove($id){
		$index = $this->exists($id);
		$cart = array_values(unserialize($this->session->userdata('cart')));
		unset($cart[$index]);
		$this->session->set_userdata('cart', serialize($cart));
		redirect('cart');
	}
	private function exists($id){
		$cart = array_values(unserialize($this->session->userdata('cart')));
		for($i = 0; $i < count($cart); $i++){
			if($cart[$i]['id'] == $id){
				return $i;
			}
		}
		return -1;
	}
	private function total(){
		$items = array_values(unserialize($this->session->userdata('cart')));
		$s = 0;
		foreach($items as $item){
			$s += $item['price'] * $item['qty'];
		}
		return $s;
	}
}
