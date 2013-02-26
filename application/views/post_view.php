<div id="results">

	<?php

	if(isset($posts)){
		foreach($posts as $post){
			echo '<div class="post_container">';
			echo '<p class="post_title"><strong>' .$post->title. '</strong></p>';
			echo $post->date_created;
			echo '<p class="post_desc">' .$post->description. '</p>';
			echo '</div>';
			
			if($post->userId == $this->session->userdata('userId')){
				//$dataArray['postInfo'] = $post;
				 //$dataArray['bob'] = true;
				echo anchor('', 'EDIT POST', 'class="edit_modal" value="'.$post->postId.'"');
				echo anchor('', 'DELETE POST', 'class="delete_link" value="'.$post->postId.'"');
				
			}
			echo '<hr>';
		}
			
	}else{
		
		echo '<p id="no_post">No posts have been added to this category.</p>';
	}	
	

	?>
	
		
</div>
	
	
