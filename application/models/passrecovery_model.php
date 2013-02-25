<?php

	class Passrecovery_model extends CI_Model{
		
		function getUsers_Credentials($query){
			
			$query = $this->db->get('users', 'username, password');
			
		}
		
	}

?>