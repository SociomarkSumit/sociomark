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
		$this->data['blogs'] = $this->blog_model->get_all_blogs_thumbnail();
		$this->load->view('index',$this->data);
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function services()
	{
		$this->load->view('service');
	}

	public function blog(){
		$this->data['blogs'] = $this->blog_model->get_all_blogs();
		$this->load->view('blog',$this->data);
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function careers()
	{
		$this->load->view('careers');
	}

	public function terms()
	{
		$this->load->view('terms-and-conditions');
	}
	public function privacy()
	{
		$this->load->view('privacy-and-policy');
	}
}
?>
