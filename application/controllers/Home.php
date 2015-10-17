<?php 
date_default_timezone_set("Asia/Manila"); 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index(){
		$data = array();
		
		$this->load->model('upload_images');
		
		$data['uploaded_images'] = $this->upload_images->get_images();
		
		
		$this->load->view('home', $data);
	}
	
	function upload(){
		$filename = md5(uniqid(rand(), true));
		$config = array(
			'upload_path' => 'uploads',
			'allowed_types' => "gif|jpg|png|jpeg",
			'file_name' => $filename
		);
		
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload())
			{
			$file_data = $this->upload->data();
			
			$data['file_dir'] = $file_data['file_name'];
			$data['date_uploaded'] = date('Y-m-d H:i:s');
			$this->load->model('upload_images');
			$this->upload_images->save_image($data);
			
			$data['message'] = "Image uploaded";
		
			$this->load->model('upload_images');
			$data['uploaded_images'] = $this->upload_images->get_images();
			$this->load->view('home', $data);
			}
			else
			{
			$data = array();	
			$this->load->model('upload_images');			
			$data['uploaded_images'] = $this->upload_images->get_images();
			
			$error = $this->upload->display_errors();
			$data['errors'] = $error;

			$this->load->view('home', $data);
			}
	}

}
?>