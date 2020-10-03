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

	public function get_blog_by_slug($slug){
		$this->db->select('p.id,p.title,p.content,p.slug,p.created_at,p.tags,m.imagefile1');
		$this->db->from('posts p');
		$this->db->join('media m','m.title = p.title');
		$this->db->where('p.slug',$slug);
		return $this->db->get()->result_array();
	}
}
?>
