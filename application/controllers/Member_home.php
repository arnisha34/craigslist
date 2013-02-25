<?php
	
	class Member_home extends CI_Controller{
		
		function index(){
			
/* 			$this->load->view('memberView'); */
						
			$this->logged_in();
			
		}
		
		
		function logged_in(){
			$this->load->model('post_model');

			$categories = $this->post_model->categoryInfo();
			$data['categories'] = $categories;


			$logged_in = $this->session->userdata('logged_in');
						
			$this->load->view('memberView', $data);
			
			if(!isset($logged_in) || $logged_in != true){
				
				echo "you don\'t have permission to access this page.
				<a href='login'>login</a>";
				die();
			}
			
		}
		
	}
?>