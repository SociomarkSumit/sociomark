<?php

class blog_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_blogs(){
		$this->db->select('p.id,p.title,p.content,p.slug,p.created_at,m.imagefile1');
		$this->db->from('posts p');
		$this->db->join('media m','m.title = p.title');
		$this->db->order_by('p.created_at','DESC');
		return $this->db->get()->result_array();
	}

	public function get_all_blogs_thumbnail(){
		$this->db->select('p.id,p.title,p.content,p.slug,p.created_at,t.imagefile1');
		$this->db->from('posts p');
		$this->db->join('thumbnail t','t.title = p.title');
		$this->db->LIMIT(5);
		$this->db->order_by('p.created_at','DESC');
		return $this->db->get()->result_array();
	}

	public function get_blog_by_slug($slug){
		$this->db->select('p.id,p.title,p.content,p.slug,p.created_at,p.tags,m.imagefile1,p.meta_title,p.meta_description,p.meta_keywords');
		$this->db->from('posts p');
		$this->db->join('media m','m.title = p.title');
		$this->db->where('p.slug',$slug);
		return $this->db->get()->result_array();
	}

	public function next_blog($id){
		$this->db->select('p.title,p.slug');
		$this->db->from('posts p');
		$this->db->where('p.id',$id+1);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function previous_blog($id){
		$this->db->select('p.title,p.slug');
		$this->db->from('posts p');
		$this->db->where('p.id',$id-1);
		$query = $this->db->get()->row_array();
		return $query;
	}
}
?>
