<?php

	class Login extends CI_Controller {

		public function __construct(){
			parent:: __construct();
			$this->load->model('users_model');
			$this->load->library('form_validation');
		}
		
		function index($msg=''){//the index function will run by default]
		
			$this->load->view('loginView');
			
		}
		
		function validate_user(){
			
			
			//$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[32]');
			
			//$this->form_validation->set_rules(('password'), 'password', 'trim|required');
			
			$query = $this->users_model->validate();
			

			if($query){//if the user's credentials validated
				//$queryUI = $this->users_model->getUserInfo($this->input->post('username'));
				
				$data = array(
					'username' => $this->input->post('username'),
					'logged_in' => true,
					'userId' => $query->userId
					//'userStatusId' => $queryUI->userStatusId
				);
								
				$this->session->set_userdata($data);
				
				
				redirect('member_home');	
					
			}else{
				$this->index();
			}
		}
	}
?>
