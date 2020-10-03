<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class posts_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function record_count() {
	    $res = $this->db->get("posts")->num_rows();
		return  $res;
	}

	public function getData_method($limit, $start){
		$this->db->select('posts.id,
		posts.title,
		posts.display_on_home,
		posts.created_at');
		$this->db->from('posts');
		$this->db->order_by('posts.id','desc');
		$this->db->limit($limit, $start);
		$query=$this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function getData_pending_method($limit, $start){
		$this->db->select('posts.id,
		posts.title,
		posts.created_at');
		$this->db->from('posts');
		$this->db->order_by('posts.id','desc');
		$this->db->limit($limit, $start);
		$query=$this->db->get()->result();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}



	public function store_method(){
        $slug = $this->string_filter($this->input->post('meta_title'));

		$data = array(
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'meta_title'=>$this->input->post('meta_title'),
			'meta_description'=>$this->input->post('meta_description'),
			'meta_keywords'=>$this->input->post('meta_keywords'),
			'tags'=>$this->input->post('tags'),
			'display_on_home'=>$this->input->post('display_on_home'),
			'slug'=>$slug,
			'status'=>$this->input->post('status'),
			'created_at'=>date('Y-m-d H:i:s')
		);

		if($this->input->post('dataId')){

			$this->db->where('id',$this->input->post('dataId'));
			$this->db->update('posts',$data);

			$response_array['message'] = 'Successfully Updated';
			$response_array['class'] = 'alert-success';
			$response=$response_array;
			$response=array('success'=>$response_array);

		}else{
			$this->db->insert('posts',$data);
			$response_array['message'] = 'Successfully Updated';
			$response_array['class'] = 'alert-success';
			$response=$response_array;
			$response=array('success'=>$response_array);			
		}

		$this->session->set_flashdata('response', $response);

		return $response;
	}

	public function string_filter($string){

		$string = preg_replace('/[^A-Za-z0-9\-\']/', '', str_replace(' ', '-', strtolower($string)));		

		return $string;
	}

	public function get_slug($slug){
		$this->db->where('slug',$slug);
		$count = $this->db->get('posts')->num_rows();
		if($count>0){
			$random_string = $this->generateRandomString();
			$slug.='---'.$random_string;
			$this->get_slug($slug);
		}

		return $slug;
	}


	public function getDataById_method($dataId){
		$this->db->where('id',$dataId);		
		$query=$this->db->get('posts');
		return $query->result();
	}


	private function set_upload_options($destination,$filename,$max_size,$max_width,$max_height,$min_width,$min_height){   
		//  upload an image options
		$config = array();
		$config['file_name'] = $filename;
		$config['upload_path'] = '../images/'.$destination.'/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = $max_size;
		$config['max_width'] = $max_width;
		$config['max_height'] = $max_height;	
		$config['min_width'] = $min_width;
		$config['min_height'] = $min_height;	
		$config['overwrite'] = FALSE;

		return $config;
	}

	public function imageresize($filename, $destination, $resize_width, $resize_height){
		$this->load->library('image_lib');
		$this->resize_thumb($filename, $destination, $resize_width, $resize_height);
	}

	public function resize_thumb($filename, $destination, $resize_width, $resize_height){

		$imagesource1='../images/'.$destination.'/'.$filename;
		$newimagesource1='../images/'.$destination.'/thumbs/'.$filename;
		// Configuration 
		$config1['image_library'] = 'gd2'; 
		$config1['source_image'] = $imagesource1; 
		$config1['new_image'] = $newimagesource1; 
		$config1['create_thumb'] = TRUE; 
		$config1['maintain_ratio'] = TRUE; 
		$config1['thumb_marker'] = ''; 
		$config1['width'] = $resize_width; 
		$config1['height'] = $resize_height; 

		// Load the Library 
		$this->image_lib->initialize($config1);

		// resize image
		$this->image_lib->resize(); 

		// handle if there is any problem 
		if ( ! $this->image_lib->resize()){ 
			echo $this->image_lib->display_errors(); 
		} 
	}

	public function delete_method(){
		$dataIdArray = $this->input->post('dataId'); //from name="checkbox[]"

		$countDataId = count($dataIdArray);
		for($i=0;$i<$countDataId;$i++){
			$DataId=$dataIdArray[$i];
			$this->db->where('id',$DataId); 
			$query=$this->db->delete('posts');
		}

		$response_array['message'] = 'Successful Deleted';
		$response_array['class'] = 'alert-success';
		$response=$response_array;
		$response=array('success'=>$response_array);
				
		$this->session->set_flashdata('response', $response);
		return $response;
	}

	public function delete_file_method($dataId,$data_field1='no_field'){
		if($data_field1=='no_field'){
			$data_field=$this->input->post('data_field');
		}else{
			$data_field=$data_field1;
		}

		$this->db->select($data_field);
		$this->db->where('id',$dataId); 
		$query=$this->db->get('posts',1);
		$row=$query->row();		

		$this->db->where('id',$dataId);
		if($this->db->update('posts',array($data_field => 'unset'))){
			unlink('../images/posts/'.$row->$data_field);
		}

		$response_array['message'] = 'Successful Deleted';
		$response_array['class'] = 'alert-success';		
		$response=$response_array;
		$response=array('success'=>$response_array);
		return $response;
	}

}
