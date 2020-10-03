<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

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

	public function contact()
	{
		$this->load->view('contact');
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
