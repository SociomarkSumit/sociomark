<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {	

	public $data=array();
	public $statusCode=200;

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')!='loggedIn'){ redirect('login'); }
		if(!in_array($this->session->userdata('admin_role'), array('super_admin','admin','blog_admin'))){ redirect('login'); }
		
		$this->load->model(array('posts_model','common_model'));
		$this->data['title']='Posts';
		$this->data['selected_menu']='posts';
	}

	public function index(){
		//Pagination
		$config["base_url"] = base_url().'posts/index/';
		$config["total_rows"] = $this->posts_model->record_count();
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$this->data["result"] = $this->posts_model->getData_method($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
		//End Pagination
		
		$this->load->template('posts/index',$this->data);
	}

	public function create(){
	    $this->data['title'] = 'Blog';
		$this->load->template('posts/create',$this->data);
	}

	public function store(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title','Title','trim|required|xss_clean');
		$this->form_validation->set_rules('content','Content','trim|required|xss_clean');
		$this->form_validation->set_rules('meta_title','Meta title','trim|required|max[180]|xss_clean');
		$this->form_validation->set_rules('meta_description','Meta Description','trim|required|xss_clean');
		$this->form_validation->set_rules('meta_keywords','Meta keywords','trim|required|xss_clean');
		$this->form_validation->set_rules('tags','tags','trim|required|xss_clean');

		if($this->form_validation->run()==FALSE){
			$this->statusCode=400;

			$form_error_array = array('title'=>form_error('title','<span>','</span>'),
				'content'=>form_error('content','<span>','</span>'),
				'meta_title'=>form_error('meta_title','<span>','</span>'),
				'meta_description'=>form_error('meta_description','<span>','</span>'),
				'meta_keywords'=>form_error('meta_keywords','<span>','</span>'),
				'tags'=>form_error('tags','<span>','</span>')
			);

			$response_array['error_type'] = 'form';
			$response_array['errors'] = $form_error_array;
			$response_array['message'] = 'Invalid Inputs';
			$response=array('error'=>$response_array);

		}else{			
			$response=$this->posts_model->store_method();
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
		$this->data['result']=$this->posts_model->getDataById_method($dataId);
		$this->load->template('posts/edit',$this->data);
	}

	public function delete(){
		$response=$this->posts_model->delete_method();
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function delete_file($dataId){

		$response=$this->posts_model->delete_file_method($dataId);
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function pending(){
		//Pagination
		$config["base_url"] = base_url().'pending/index/';
		$config["total_rows"] = $this->posts_model->record_count_pending();
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$this->data["result"] = $this->posts_model->getData_pending_method($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
		//End Pagination
		
		$this->load->template('posts/index',$this->data);
	}

	
}
