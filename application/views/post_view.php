<div id="results">

	<?php

	if($posts){
		foreach($posts as $post){
			echo '<div class="post_container">';
			echo '<p class="post_title"><strong>' .$post->title. '</strong></p>';
			echo $post->date_created;
			echo '<p class="post_desc">' .$post->description. '</p>';
			echo '</div>';
			
			if($post->userId == $this->session->userdata('userId')){
				$dataArray['postInfo'] = $post;

				echo anchor('post/editPost/'.$post->postId, 'EDIT POST', 'class="edit_modal"');
				echo anchor('post/deletePost', 'DELETE POST', 'class="delete_link"');
				$this->load->view('includes/modalPanel_view', $dataArray);
			}
		}
			
	}else{
		
		echo '<p id="no_post">No posts have been added to this category.</p>';
	}	

	?>
		
	
		
</div>
	
	
