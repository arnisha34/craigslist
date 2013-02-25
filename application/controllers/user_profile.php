<?php

	class User_profile extends CI_Controller{
		
		public function __construct(){
			parent:: __construct();
			$this->load->model('post_model');
			$this->load->model('users_model');
			
			
		}
		function index(){
			
			
			//echo 'this is the user profile';
			$data['title'] = 'Page title booooooooob';
			$data['header'] = 'includes/header';
			$data['main_content'] = 'userProfile_view'; 
			$this->load->view('includes/page_view', $data);
			//$categories = $this->post_model->categoryInfo();
			//$data['categories'] = $categories;
			//$data['posts'] = $this->post_model->getAllPosts();
			
		}
	}
?>