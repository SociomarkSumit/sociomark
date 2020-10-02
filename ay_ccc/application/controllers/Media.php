<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {	

	public $data=array();
	public $statusCode=200;

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')!='loggedIn'){ redirect('login'); }
		if(!in_array($this->session->userdata('admin_role'), array('super_admin','admin','blog_admin'))){ redirect('login'); }
		
		$this->load->model('media_model');
		$this->data['title']='Media';
		$this->data['selected_menu']='media';
	}

	public function index(){		
		//Pagination
		$config["base_url"] = base_url().'index.php/media/index/';
		$config["total_rows"] = $this->media_model->record_count();
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$this->data["result"] = $this->media_model->getData_method($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
		//End Pagination

		$this->load->template('media/index',$this->data);
	}

	public function create(){		
		$this->load->template('media/create',$this->data);
	}

	public function store(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','trim|required|xss_clean');
		if($this->form_validation->run()==FALSE){
			$this->statusCode=400;

			$form_error_array = array('title'=>form_error('title','<span>','</span>'));

			$response_array['error_type'] = 'form';
			$response_array['errors'] = $form_error_array;
			$response_array['message'] = 'Invalid Inputs';
			$response=array('error'=>$response_array);
			
		}else{			
			$response=$this->media_model->store_method();
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
		$this->data['result']=$this->media_model->getDataById_method($dataId);
		$this->load->template('media/edit',$this->data);
	}

	public function delete(){
		$response=$this->media_model->delete_method();
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function delete_file($dataId){

		$response=$this->media_model->delete_file_method($dataId);
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}
	
}
