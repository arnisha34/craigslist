<?php

	class Post extends CI_Controller{
		
		public function __construct(){
			parent:: __construct();
			$this->load->model('post_model');
			
		}
		
		function index(){
			
			$categories = $this->post_model->categoryInfo();
			$data['categories'] = $categories;
			$data['posts'] = $this->post_model->getAllPosts();
			
			$this->load->view('resultsView', $data);

		}
		function getCategoryPosts(){
			
			$catId = $this->uri->segment(3);
			$categories = $this->post_model->categoryInfo();
			
			//repeating code from index
			$data['categories'] = $categories;
			$data['posts'] = $this->post_model->getCategoryPosts($catId);
			
			$this->load->view('resultsView', $data);

		}
		function getUserPosts(){
		
			$categories = $this->post_model->categoryInfo();
			$data['categories'] = $categories;
			
			$username = $this->session->userdata('username');
			//this gets all posts related to that user
			$data['posts'] = $this->post_model->getUserPosts($username); 
			//print_r($data);
			$data['title'] = "Your Posts";
			$this->load->view('includes/page_view', $data);
			
		}

		function editPost(){
			$postId = $this->input->post('postId');
			$data['postInfo'] = $this->post_model->getPost($postId);
			echo $data['postInfo'];
		}
		function deletePost(){
			$postId = $this->input->post('postId');
			$postDeleted = $this->post_model->deletePost($postId);
			
			if($postDeleted){
				echo 'Post Deleted';	
			}else{
				echo 'Your post was not deleted';
			}
		}
		function savePost(){

			$postId = $this->input->post('postId');			
			$saveChanges = $this->post_model->editPost($postId);
			if($saveChanges){
				echo 'Changes Saved';	
			}else{
				echo 'Your post has not been updates';
			}
		}
		function addPost(){
			
			$data['title'] = $this->input->post('title');
			$data['categoryId'] = $this->input->post('postType');
			$data['location'] = $this->input->post('location');
			$data['description'] = $this->input->post('description');
			$data['price'] = $this->input->post('price');
			$data['email'] = $this->input->post('email');
			$data['userId'] = $this->session->userdata('userId');
		
			//echo $data;
			$this->post_model->addPost($data);
			redirect('post');
/* 			$this->load->view('resultsView', $data); */

		}
		
	}