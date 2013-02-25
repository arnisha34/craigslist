<?php

	class Guest_Results_model extends CI_Model{
		
		function getPost(){
			
			$query = $this->db->get->('post', 4),
				/* $this->db->get->('categories') */

		
			return $query->result();		
		}
		
		function addPost(){
			
			
		}
		
		function updatePost(){
			
			
		}
		
		function deletePost(){
			
			
		}
	}

?>