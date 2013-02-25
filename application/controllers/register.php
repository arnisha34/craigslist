<?php

	class Register extends CI_Controller{
		
		function index(){
			
			$this->load->view('registerView');	
			
		}
		
		function newUser(){
						
			$this->load->model('users_model');
			
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[20]|is_unique[users.username]');
			
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[32]|is_unique[users.password]');
			
/* 			$this->form_validation->set_rules('pass_conf', 'password confirmation', 'trim|required'); */
			
			$this->form_validation->set_rules('email', 'email', 'required|is_unique[users.email]|valid_email');
			
			if ($this->form_validation->run() == FALSE){

				$this->load->view('registerView');

			}else{

				$data = array(
			
					'username' =>$this->input->post('username'),
					'password' =>$this->input->post('password'),
					'email' =>$this->input->post('email')
				);
				
				$this->users_model->createNewUser($data);
					
				$this->load->view('regsuccessView');	

			}
		
		}
		
	}	
?>