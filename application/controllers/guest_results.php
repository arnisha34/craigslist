<?php

	class Guest_Results extends CI_Controller{
		
		function index(){
				
			$this->load->view('guest_resultsView');
		}
		
		function viewPost(){
			
			$this->load->model('guest_results_model');
			$this->load->guest_results_model('getPost');
			
			$data = array(
				
				'postId' => 'postId',
				'imageId' =>'imageId',
				'title' => 'title',
				'catId' => 'categoryId',
				'price' => 'price',
				'location' => 'location',
				'description' => 'description',
				'date' => 'date_created',
				'category' => 'category'
			);
		}
	}

?>