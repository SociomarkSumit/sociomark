<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postcategory extends CI_Controller {	

	public $data=array();
	public $statusCode=200;

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')!='loggedIn'){ redirect('login'); }
		if(!in_array($this->session->userdata('admin_role'), array('super_admin','admin','blog_admin'))){ redirect('login'); }
		
		$this->load->model(array('postcategory_model','common_model'));
		$this->data['title']='Post category';
		$this->data['selected_menu']='postcategory';
	}

	public function index(){
		//Pagination
		$config["base_url"] = base_url().'index.php/postcategory/index/';
		$config["total_rows"] = $this->postcategory_model->record_count();
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$this->data["result"] = $this->postcategory_model->getData_method($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
		//End Pagination
		
		$this->load->template('postcategory/index',$this->data);
	}

	public function create(){
		$this->data['result_categories'] = $this->common_model->getData_categories();
		$this->load->template('postcategory/create',$this->data);
	}

	public function store(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('category','Category','trim|required|xss_clean');

		if($this->form_validation->run()==FALSE){
			$this->statusCode=400;

			$form_error_array = array(
				'category'=>form_error('category','<span>','</span>')
			);

			$response_array['error_type'] = 'form';
			$response_array['errors'] = $form_error_array;
			$response_array['message'] = 'Invalid Inputs';
			$response=array('error'=>$response_array);

		}else{			
			$response=$this->postcategory_model->store_method();
			if(array_key_exists('error', $response)){
				$this->statusCode=400;
			}			
		}

		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function edit($dataId){
		$this->data['result']=$this->postcategory_model->getDataById_method($dataId);
		$this->data['result_categories'] = $this->common_model->getData_categories();
		$this->load->template('postcategory/edit',$this->data);
	}

	public function delete(){
		$response=$this->postcategory_model->delete_method();
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function getData_states(){
		$result = $this->common_model->getData_states_method($this->input->post('country_id'));
		$response = array('success'=>$result);
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function getData_cities(){
		$result = $this->common_model->getData_cities_method($this->input->post('state_id'));
		$response = array('success'=>$result);
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	
}
