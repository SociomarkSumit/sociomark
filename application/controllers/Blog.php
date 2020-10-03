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
		$this->load->view('blogs/template',$this->data);
	}
}
?>
