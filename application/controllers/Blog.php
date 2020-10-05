<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model','blog_model');
	}

	public function index($slug = 'unset'){
		$this->data['blogs'] = $this->blog_model->get_blog_by_slug($slug);
		$this->data['recent_blogs'] = $this->blog_model->get_all_blogs_thumbnail();
		$this->data['next_blog'] = $this->blog_model->next_blog($this->data['blogs'][0]['id']);
		if(empty($this->data['next_blog'])){
			$this->data['next_blog'] = $this->blog_model->previous_blog($this->data['blogs'][0]['id']);

		}
		$this->load->view('blogs/template',$this->data);
	}
}
?>
