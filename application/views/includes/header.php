<div id="main">
		
		<div id="header">
		
			<div id="logo">
			
				<?php echo anchor('member_home', 'logo', 'id="logo1"');?>
			
			</div>
			
			<div id="box">
			
			    <a href="#" class="btmiddle bt"><?php echo $this->session->userdata('username');?><img src="images/dn_arrow.png" id="dn_arrow"/></a>
			    
			    <?php echo anchor('login', 'log out', 'id="logout"');?>
				
				<input type="text" name="search" maxlength="255" value="search" onblur="if (this.value == '') {this.value = 'search'}"
 onfocus="if (this.value == 'search') {this.value = ''}" autocomplete="off"/>
 
				<button id="search_icon" type="submit" name="button" value="search" style=" cursor:pointer">search</button>
				
				<a href="#" id="cl_link">Craigslist 411</a>
		
			</div>
		
		</div>
		
		<div id="menu">
		    <div id="triangle"></div>
		    	<div id="tooltip_menu">
			       
			        <?php 
				        echo anchor('user_profile', 'Your Profile', array('class'=> 'menu_top'));
				        //echo '<img src="images/edit.png" style="margin-left: -15px; padding-right: 10px;"/>';
				        
			        ?>
			         <?php 
				        echo anchor('post/getUserPosts', 'Your Posts', array('class'=> 'menu_bottom'));
				        //echo '<img src="images/paperclip.png" style="margin-left: -40px; padding-right: 30px;"/>';
				        
			        ?>
			        
		        </div>
	        </div>
	    </div>
</div>  