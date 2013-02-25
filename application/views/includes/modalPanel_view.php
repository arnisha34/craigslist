<?php
		
	if(isset($postInfo)){
	
		echo '<div id="edit_dialog" title="EDIT POST">';
		echo '<div id="post_info">';
		
			echo form_open('post/editPost');
			
			echo form_hidden('postId', $postInfo->postId );
			
				$hide_email = array(
					'value' => 'hide_email',
					'name' => 'hide_email',
					'id'=> 'hide_email',
					'checked' => TRUE,
				);
	
			
				$text = array(
					'id' => 'text_area',
					'name' => 'description',
					'value' => $postInfo->description,
					'rows' => '10',
					'cols' => '70',
					'style' => 'color: gray; font-size: 14px; padding: 5px 0 0 3px;'
				);
					
				echo form_input('title', $postInfo->title, 'id="post_ttl"');
				echo form_input('price', $postInfo->price , 'id="post_price"');
				echo form_input('location', $postInfo->location , 'id="location"');
				echo form_label('REPLY TO:', 'reply_to');
				echo form_input('email', $postInfo->email, 'id="s_email"');
				//echo form_checkbox($hide_email);
				//echo form_checkbox($anonymize);
				
				echo form_textarea($text);
				
				echo form_submit('submit', '', 'id="add_post"');
				
				echo form_close();
				
				echo '	</div>';
				echo '	</div>';
				
	}elseif(isset ($categories)) {
		//add a blank modal 
		echo '<div id="member_dialog" title="CREATE A POST">';
		
	
				$dropDownAttributes = array(
					'id' => 'postType',
					'name' => 'postType'
				);
				//var_dump($categories);
				foreach($categories as $category => $catItem){
					
					$categoryArr[$catItem->categoryId] = $catItem->category;
				}
				echo form_open('post/addPost');
				echo form_dropdown('postType', $categoryArr, 'Community', 'id="postType" name="postType"');
				
			echo "<select>
				<option value=''>-</option>
				<option value='acc' class='job1'>Accounting</option>
				<option value='business' class='job1'>Business/Management</option>
				<option value='cust_svc' class='job1'>Customer Service</option>
				<option value='education' class='job1'>Education</option>
				<option value='general' class='job1'>General Labor</option>
				<option value='gov' class='job1'>Government</option>
				<option value='adv' class='job1'>Marketing/Advertising/Public Relations</option>
				<option value='retail' class='job1'>Retail/Wholesale</option>
				<option value='security' class='job1'>Security</option>
				<option value='web' class='job1'>Web/Info. Design</option>
			</select>";
	
		
		echo '<div id="post_info">';
	
			
				$hide_email = array(
					'value' => 'hide_email',
					'name' => 'hide_email',
					'id'=> 'hide_email',
					'checked' => TRUE,
				);
				
				$anonymize = array(
					'value' => 'anonymize',
					'name' => 'anonymize',
					'id'=> 'anonymize'
				);
	
			
				$text = array(
					'id' => 'text_area',
					'name' => 'description',
					'value' => 'post description',
					'rows' => '10',
					'cols' => '70',
					'style' => 'color: gray; font-size: 14px; padding: 5px 0 0 3px;'
				);
					
				echo form_input('title', 'title', 'id="post_ttl"');
				
				echo form_input('price', 'price', 'id="post_price"');
				echo form_input('location', 'location', 'id="location"');
	
				echo form_label('REPLY TO:', 'reply_to');
				echo form_input('email', 'email', 'id="s_email"');
				echo form_checkbox($hide_email);
				echo form_checkbox($anonymize);
				
				echo form_textarea($text);
				
				echo form_submit('submit', '', 'id="add_post"');
				
				echo form_close();
			
		
				
		echo '</div>';
			
		echo '</div>';
	
		
	}
				
				
?>
					
