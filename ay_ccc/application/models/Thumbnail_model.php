<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class thumbnail_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}

	public function record_count() {
		return  $this->db->get("thumbnail")->num_rows();
	}

	public function getData_method($limit, $start){
		$this->db->select('id,imagefile1,title');
		$this->db->order_by('id','desc');
		$this->db->limit($limit, $start);
		$query=$this->db->get('thumbnail');

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}


	public function store_method(){

		$this->load->library('upload');
		
		/*Start Imagefile1 Upload*/
		if($this->input->post('imageexist1')){
			$filename1=$this->input->post('imageexist1');
		}else{
			$destination='thumbnail';
			$filename1=str_replace(' ', '', date('Ymdhis').'_'.$_FILES['imagefile1']['name']);
			$max_size='600';
			$max_width='700';
			$max_height='600';
			$min_width='50';
			$min_height='50';
            $conf = $this->set_upload_options($destination,$filename1,$max_size,$max_width,$max_height,$min_width,$min_height);
			$this->upload->initialize($conf);

			if(!$this->upload->do_upload('imagefile1')){

				$response_array['error_type'] = 'file';
				$response_array['errors'] = $this->upload->display_errors();
				$response_array['error_field'] = 'imagefile1';
				$response_array['message'] = 'Unsuccessful!!';
				$response_array['class'] = 'alert-danger';
				$response=$response_array;
				$response=array('error'=>$response_array);

				return $response;
	        }
		}		
        /*End Imagefile1 Upload*/


		$data = array(		
			'imagefile1'=>$filename1,
			'title'=>$this->input->post('title')
		);

		if($this->input->post('dataId')){
			$this->db->where('id',$this->input->post('dataId'));
			$this->db->update('thumbnail',$data);

			$response_array['message'] = 'Successful Updated';
			$response_array['class'] = 'alert-success';
			
		}else{
			$this->db->insert('thumbnail',$data);

			$response_array['message'] = 'Successful Added';
			$response_array['class'] = 'alert-success';
		}

		$response=$response_array;
		$response=array('success'=>$response_array);

		$this->session->set_flashdata('response', $response);
		
		return $response;
	}


	public function getDataById_method($dataId){
		$this->db->select('id,device,imagefile1,alt,url,sort_order,status');	
		$this->db->where('id',$dataId);		
		$query=$this->db->get('thumbnail');
		return $query->result();
	}	


	private function set_upload_options($destination,$filename,$max_size,$max_width,$max_height,$min_width,$min_height){   
	//  upload an image options
		$config = array();
		$config['file_name'] = $filename;
		$config['upload_path'] = '../images/uploads/'.$destination.'/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = $max_size;
		$config['max_width'] = $max_width;
		$config['max_height'] = $max_height;	
		$config['min_width'] = $min_width;
		$config['min_height'] = $min_height;	
		$config['overwrite'] = FALSE;

		return $config;
	}

	public function imageresize($filename){
		

		$this->resize_thumb($filename);

	}

	public function resize_thumb($filename){
        $this->load->library('image_lib');
		$imagesource1='../images/thumbnail/'.$filename;
		$newimagesource1='../images/thumbnail/thumbs/'.$filename;
		// Configuration 
		$config1['image_library'] = 'gd2'; 
		$config1['source_image'] = $imagesource1; 
		$config1['new_image'] = $newimagesource1; 
		$config1['create_thumb'] = TRUE; 
		$config1['maintain_ratio'] = TRUE; 
		$config1['width'] = 300; 
		$config1['height'] = 240; 

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

			$this->delete_file_method($DataId,$data_field1='imagefile1');

			$this->db->where('id',$DataId); 
			$query=$this->db->delete('thumbnail');
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
		$query=$this->db->get('thumbnail',1);
		$row=$query->row();		

		$data=array($data_field=>'no_file');
		$this->db->where('id',$dataId);
		if($this->db->update('thumbnail',$data)){
			unlink('../images/uploads/thumbnail/'.$row->$data_field);
			unlink('../images/thumbnail/'.$row->$data_field);
			unlink('../images/thumbnail/thumbs/'.$row->$data_field);
		}

		$response_array['message'] = 'Successful Deleted';
		$response_array['class'] = 'alert-success';		
		$response=$response_array;
		$response=array('success'=>$response_array);
		return $response;
	}

}
