<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model','blog_model');

	}
	public function index()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function services()
	{
		$this->load->view('service');
	}

	public function blog($slug = 'unset'){
		$this->data['blogs'] = $this->blog_model->get_blog_by_slug($slug);
		$this->load->view('blogs/template',$this->data);
	}

	public function blogs(){
		$this->data['blogs'] = $this->blog_model->get_all_blogs();
		$this->load->view('blog',$this->data);
	}
}
?>
