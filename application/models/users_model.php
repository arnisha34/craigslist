<?php

	class Users_model extends CI_Model {
	
		function validate(){
			
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password', $this->input->post('password'));
			
			$query = $this->db->get('users');
			
			if($query->num_rows == 1)
			{
				$result = $query->result();
				return $result[0];
			}else{
				echo 'No user or password';
				return false;
				
				
				
			}
			
		}
		
		function getUserInfo($username){
			
			$this->db->where('username', $username);
			$query = $this->db->get('users');
			
			if($query->num_rows > 0){
				
				foreach($query->result() as $row){
					
					$data = $row;
				}
			}
			return $data;
			
		}
		
		/*-------------Register User-----------*/
		
		function createNewUser($data){
			
			$this->db->insert('users', $data);
			return;
					
		}

		function updateNewUser($data, $userId){
			
			$this->db->where('userId', $userId);
			$this->db->update('users', $data);
			
		}
		
		/*-------------Forgot Password-----------*/
		
		function forgotCredentials(){
		
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password', $this->input->post('email'));
			
			$query = $this->db->get('users');
			
			if($query->num_rows == 1){
			
				return true;
			}
		}
		
		/*-------------User Profile-----------*/
		
		function getProfile(){
			
			
		}
		
		function updateProfile(){
			
			
		}
		
		function deleteProfile(){
			
		}
	}
?>
