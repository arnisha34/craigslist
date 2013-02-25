<?php

	class Register_model extends CI_Model{
		
		
		function createNewUser($data){
			
			$this->db->insert('users', $data);
			return;
					
		}

		function updateNewUser($data, $userId){
			
			$this->db->where('userId', $userId);
			$this->db->update('users', $data);
			
		}

	}
?>