<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function getData_countries(){
		$this->db->select('id,country');		
		$query = $this->db->get('countries');
		return $query->result();
	}

	public function getData_states_method($country_id){
		$this->db->select('id,name');
		$this->db->where('country_id', $country_id);
		$query = $this->db->get('states');
		return $query->result();
	}

	public function getData_cities_method($state_id){
		$this->db->select('id,name');
		$this->db->where('state_id', $state_id);
		$query = $this->db->get('cities');
		return $query->result();
	}

	public function getData_brands(){
		$this->db->select('id,brand');
		$this->db->where('status', 's_act');
		$query = $this->db->get('brands');
		return $query->result();
	}

	public function getData_categories(){

		$this->db->select('id,category,parent_id');
		$this->db->where('status', 's_act');
		$this->db->order_by('category','asc');
		$query=$this->db->get('categories');

		return $query->result();
	}

	public function getData_vendors(){

		$this->db->select('id,vendor_name');
		$this->db->where('status', 's_act');
		$this->db->order_by('vendor_name','asc');
		$query=$this->db->get('vendors');

		return $query->result();
	}

	public function getData_option_groups(){
		$this->db->select('id,name');
		$query=$this->db->get('option_groups');
		return $query->result();
	}

	public function getData_options(){
		$this->db->select('id,option_group_id,name');
		$query=$this->db->get('option');
		return $query->result();
	}

	
	public function getData_orderStatusList(){
		$this->db->select('id,status');
		$query = $this->db->get('order_status');
		return $query->result();	
	}

}
