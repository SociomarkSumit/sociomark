<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('portfolio/index');
	}

	public function cnbc_diageo()
	{
		$this->load->view('portfolio/road-to-safety');
	}

}
?>
