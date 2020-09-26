<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

	public function index(){
		$this->load->view('blog');
	}

	public function blog1(){
		$this->load->view('blogs/blog1');
	}

}
?>
