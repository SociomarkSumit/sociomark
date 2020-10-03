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

	public function road_safety()
	{
		$this->load->view('portfolio/road-to-safety');
	}
	public function castrol()
	{
		$this->load->view('portfolio/castrol');
	}
	public function nodwin()
	{
		$this->load->view('portfolio/nodwin');
	}

	public function rea()
	{
		$this->load->view('portfolio/rea');
	}

	public function bddb()
	{
		$this->load->view('portfolio/bddb');
	}

}
?>
