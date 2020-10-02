<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $data=array();
	public $statusCode=200;

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->data['title']='Change Password';
		$this->data['selected_menu']='login';
	}

	public function index(){
		$this->load->view('login');
	}

	public function authentication(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('passcode','Password','trim|required|xss_clean');
		
		if($this->form_validation->run()==FALSE){
			$this->statusCode=400;

			$form_error_array = array('username'=>form_error('username','<span>','</span>'),
			'passcode'=>form_error('passcode','<span>','</span>'));

			$response_array['error_type'] = 'form';
			$response_array['errors'] = $form_error_array;
			$response_array['message'] = 'Invalid Inputs';
			$response=array('error'=>$response_array);
		}else{			
			$response=$this->login_model->authenticateuser();

			if(array_key_exists('error', $response)){
				$this->statusCode=400;
			}

		}

		return $this->output
			->set_status_header($this->statusCode)
			->set_content_type('application/json', 'utf-8')			
			->set_output(json_encode($response));
	}

	public function change_password(){
		if($this->session->userdata('admin_logged_in')=='loggedIn'){
			$this->load->template('_form_changepassword',$this->data);
		}
	}

	public function change_password_process(){
		if($this->session->userdata('admin_logged_in')=='loggedIn'){

			$this->load->library('form_validation');
			$this->form_validation->set_rules('old_password','Old Password','trim|required|xss_clean');
			$this->form_validation->set_rules('new_password','Password','trim|required|min_length[8]|max_length[12]|matches[confirm_password]|xss_clean');
			$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|xss_clean');	

			if($this->form_validation->run()==FALSE){
				$this->statusCode=400;

				$form_error_array = array('old_password'=>form_error('old_password','<span>','</span>'),
				'new_password'=>form_error('new_password','<span>','</span>'),
				'confirm_password'=>form_error('confirm_password','<span>','</span>'));

				$response_array['error_type'] = 'form';
				$response_array['errors'] = $form_error_array;
				$response_array['message'] = 'Invalid Inputs';
				$response=array('error'=>$response_array);

			}else{			
				$response=$this->login_model->change_password_method();

				if(array_key_exists('error', $response)){
					$this->statusCode=400;
				}				
				
			}

			$this->session->set_flashdata('response', $response);
			
			return $this->output
				->set_status_header($this->statusCode)
				->set_content_type('application/json', 'utf-8')			
				->set_output(json_encode($response));

		}else{
			redirect('login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('admin_logged_in');
		$this->session->sess_destroy();
		redirect('login');
	}

	public function hack_change_password(){
		$this->login_model->hack_change_password_method();
	}
}
