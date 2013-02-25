<?php

	class Pass_Recovery extends CI_Controller {

		function index(){//the index function will run by default]
		
			$this->load->view('passrecoveryView');
			
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 587,
				'smtp_user' => 'arnisha34@gmail.com',
				'smtp_pass' => 'angelic'
			);
			
			$this->load->library('email', $config);
			
			$this->email->set_newline("\r\n");
			
		}
		
		function email_credentials(){
			
			$this->load->model('users_model');

			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[32]');
			
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			
			$this->users_model->forgotCredentials();
			
			var_dump($this->input->post('email'));
			
			if($this->form_validation->run() == FALSE){
				
				$this->index();
								
			}else if(forgotCredentials() == true){
										
				$this->email->from('arnisha34@gmail.com', 'Cragislist');
				$this->email->to($this->input->post('email'));
				$this->email->subject('Password Recovery');
				$this->email->message('So you forgot your password!  No worries we\'re here to save the day!', $this->get('password'));
				
				if($this->email->send()){
						
						echo 'Your email was sent successfully';
				}else{
					
					show_error($this->email->print_debugger());
				}
				
				$this->load->view('login');
			}
		}
	}
?>
