<?php

	class Post_model extends CI_Model{
		
		function getAllPosts(){
		
			$query = $this->db->get('post');
			
			if($query->num_rows() > 0){
			
				foreach( $query->result() as $row){
					
					$data[] = $row;
				}
				return $data;
				
			}
			
		}
		function getCategoryPosts($catId){
			
			$this->db->select('*');
			$this->db->from('post');
			$this->db->where('categoryId', $catId);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
				return $data;
				
			}
			
		}
		function getUserPosts($username){
			
			$this->db->select('*');
			$this->db->from('post');
			$this->db->join('users', 'post.userId = users.userId', 'left' );
			$this->db->where('username', $username);
			
			$query = $this->db->get();
			if($query->num_rows() > 0){
				foreach($query->result() as $userPosts){
					$data[] = $userPosts;
				}
				return $data;
			}
			
		}
		
		function addPost($data){
			
			$this->db->set('date_created', 'NOW()', FALSE)->insert('post', $data);

		}
		function getPost($postId){
			$q= $this->db->get_where('post', array('postId' => $postId));
			if($q->num_rows()>0){
				foreach($q->result() as $row){
					
					$data[] = $row;
				}
				
				return json_encode($data[0]);	
			}
			
		}
		
		function editPost($postId){

			$data = array(
              'title' => $this->input->post('title'),
              'location' => $this->input->post('location'),
              'description' => $this->input->post('description'),
              'price'=> $this->input->post('price'),
              'email' => $this->input->post('email')
            );
         
			$this->db->where('postId', $postId);
		 	$q = $this->db->update('post', $data);
		 	
		 	if($q){
		 		return true;
		 	}else{
		 		return false;
		 	}
			
		}
		
		function deletePost($postId){
			
			$this->db->where('postId', $postId);
			$q= $this->db->delete('post');
			if($q){
		 		return true;
		 	}else{
		 		return false;
		 	}

		}
		function categoryInfo(){
			
			$query = $this->db->get('categories');
			
			if($query->num_rows()> 0){
			
				foreach($query->result() as $row){
					
					$data[] =  $row;

				}
				
				return $data;
			}		
			
		}
		
		
	}