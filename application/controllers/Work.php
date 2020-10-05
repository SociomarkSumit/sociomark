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

	public function mfcs()
	{
		$this->load->view('portfolio/mfcs');
	}
	public function sportz_consult()
	{
		$this->load->view('portfolio/sportz-consult');
	}

	public function team_cashless_india()
	{
		$this->load->view('portfolio/team-cashless-india');
	}

	public function smarter_india()
	{
		$this->load->view('portfolio/smarter-india');
	}

	public function kolkata_rolls()
	{
		$this->load->view('portfolio/kolkata-rolls');
	}

	public function smart_cities_of_india()
	{
		$this->load->view('portfolio/smart-cities-of-india');
	}

	public function inifd_vashi()
	{
		$this->load->view('portfolio/inifd-vashi');
	}

	public function hollywood_opticians()
	{
		$this->load->view('portfolio/hollywood-opticians');
	}

	public function foresight_opticals()
	{
		$this->load->view('portfolio/foresight-opticals');
	}

	public function ayushakti()
	{
		$this->load->view('portfolio/ayushakti');
	}

	public function ai_awards()
	{
		$this->load->view('portfolio/ai-awards');
	}

	public function lime()
	{
		$this->load->view('portfolio/lime');
	}

	public function mission_insure_india()
	{
		$this->load->view('portfolio/mission-insure-india');
	}

	public function grill_box()
	{
		$this->load->view('portfolio/grill-box');
	}

	public function cosplay_genie()
	{
		$this->load->view('portfolio/cosplay-genie');
	}

	public function the_professional_couriers()
	{
		$this->load->view('portfolio/the-professional-couriers');
	}

	public function ayushakti_website()
	{
		$this->load->view('portfolio/ayushakti-website');
	}
}
?>
