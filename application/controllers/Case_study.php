<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Case_study extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('case_study/index');
	}

	public function real_estate_awards(){
		$this->load->view('case_study/real_estate_awards');
	}

	public function button_dabao_desh_banao(){
		$this->load->view('case_study/button_dabao_desh_banao');
	}

	public function road_to_safety_initiative(){
		$this->load->view('case_study/road_to_safety_initiative');
	}
}

?>
