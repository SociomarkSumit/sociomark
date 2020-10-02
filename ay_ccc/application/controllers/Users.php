<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {	

	public $data=array();
	public $statusCode=200;

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')!='loggedIn'){ redirect('login'); }
		if(!in_array($this->session->userdata('admin_role'), array('super_admin'))){ redirect('login'); }

		$this->load->model(array('users_model','common_model'));
		$this->data['title']='Users';
		$this->data['selected_menu']='users';
	}

	public function index(){
		//Pagination
		$config["base_url"] = base_url().'index.php/users/index/';
		$config["total_rows"] = $this->users_model->record_count();
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$this->data["result"] = $this->users_model->getData_method($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
		//End Pagination
		
		$this->load->template('users/index',$this->data);
	}

	public function create(){
		$this->data['country_result']= $this->common_model->getData_countries();
		$this->load->template('users/create',$this->data);
	}

	public function store(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Status','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean');
		$this->form_validation->set_rules('country_id','Country','trim|required|xss_clean');
		$this->form_validation->set_rules('status','Status','trim|required|xss_clean');
		if($this->form_validation->run()==FALSE){
			$this->statusCode=400;

			$form_error_array = array('username'=>form_error('username','<span>','</span>'),
				'password'=>form_error('password','<span>','</span>'),
				'country_id'=>form_error('country_id','<span>','</span>'),
				'status'=>form_error('status','<span>','</span>')
			);

			$response_array['error_type'] = 'form';
			$response_array['errors'] = $form_error_array;
			$response_array['message'] = 'Invalid Inputs';
			$response=array('error'=>$response_array);

		}else{			
			$response=$this->users_model->store_method();
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
		$this->data['result']=$this->users_model->getDataById_method($dataId);
		$this->data['country_result']= $this->common_model->getData_countries();
		$this->load->template('users/edit',$this->data);
	}

	public function view($fb_id){
		$this->data['result_userdetails']=$this->users_model->getDataById_method($fb_id);
		$this->data['result_photos'] = $this->users_model->getData_photos_method($fb_id);
		$this->load->template('users/view',$this->data);
	}

	public function delete(){
		$response=$this->users_model->delete_method();
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function regionsGetData(){
		$result = $this->common_model->regionsGetData_method();
		$response = array('success'=>$result);
		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	
}
