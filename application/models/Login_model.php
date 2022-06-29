<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Login_model extends CI_Model{
	// check for user credentials and log the user in
	public function login($username, $password){
		$this->db->select('id, fullname, username, email, role, logged_in');
		$this->db->from('users');
		$this->db->where(array('username' => $username, 'password' => $password));
		return $this->db->get()->row();
	}
	// update logged_in status on the database.
	public function update_logged_in($id){
		$result = $this->db->query("UPDATE users SET `logged_in` = NOT `logged_in` WHERE id=$id");
		return $result ? true : false;
	}
}
