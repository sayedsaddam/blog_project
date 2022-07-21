<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * undocumented class
 */
class Admin_model extends CI_Model{
	// add article
	public function add_article($data){
		$this->db->insert('blog', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	// list articles > published articles
	public function list_articles($limit, $offset){
		$this->db->select('blog.id,
									blog.title,
									blog.slug,
									blog.blog_description,
									blog.status,
									blog.added_by,
									blog.updated_by,
									blog.created_at,
									blog.updated_at,
									users.fullname');
		$this->db->from('blog');
		$this->db->join('users', 'blog.added_by = users.id', 'left');
		$this->db->where('blog.status', 1);
		$this->db->limit($limit, $offset);
		return $this->db->get()->result();
	}
	// list articles > trashed / unpublished articles
	public function trashed_articles($limit, $offset){
		$this->db->select('blog.id,
									blog.title,
									blog.slug,
									blog.blog_description,
									blog.status,
									blog.added_by,
									blog.updated_by,
									blog.created_at,
									blog.updated_at,
									users.fullname');
		$this->db->from('blog');
		$this->db->join('users', 'blog.added_by = users.id', 'left');
		$this->db->where('blog.status', 0);
		$this->db->limit($limit, $offset);
		return $this->db->get()->result();
	}
	// get article by slug
	public function get_article($slug){
		$this->db->select('blog.id,
									blog.title,
									blog.slug,
									blog.blog_description,
									blog.status,
									blog.added_by,
									blog.updated_by,
									blog.created_at,
									blog.updated_at,
									users.fullname');
		$this->db->from('blog');
		$this->db->join('users', 'blog.added_by = users.id', 'left');
		$this->db->where('blog.slug', $slug);
		return $this->db->get()->row();
	}
	// update article by id
	public function update_article($id, $data){
		$this->db->where('id', $id);
		$this->db->update('blog', $data);
		return true;
	}
	// update article status by slug
	public function delete_article($id){
		$this->db->query("UPDATE blog SET `status` = NOT `status` WHERE id=$id");
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	// search articles
	public function search_articles($searh){
		$this->db->select('blog.id,
									blog.title,
									blog.slug,
									blog.blog_description,
									blog.status,
									blog.added_by,
									blog.updated_by,
									blog.created_at,
									blog.updated_at,
									users.fullname');
		$this->db->from('blog');
		$this->db->join('users', 'blog.added_by = users.id', 'left');
		$this->db->where('blog.status', 1);
		$this->db->like('blog.title', $searh);
		$this->db->or_like('blog.blog_description', $searh);
		return $this->db->get()->result();
	}
}
