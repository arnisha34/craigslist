<html>
	<head>
		<title>Craigslist</title>
	
	<base href="<?php echo base_url(); ?>" />
	
	<link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	
	<link rel="stylesheet" type="text/css" href="css/dropzone.css" />
	
	<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.0.custom.css"/>

	<link rel="stylesheet" href="css/flickr_dropdown.css" type="text/css"/>
	
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
	
		html{
			background: #a0dbea;
			
			@font-face {
			  font-family: 'Couture Bold';
			  src: url('COUTURE-Bold.ttf');
			}
		}
		
	</style>
	<?php
	//$this->load->view('includes/header');
	?>
	</head>
	<body><!--starts body-->
	
		<div id="main">
		
		</div>
		
		<div id="header">
		
			<div id="logo">
			
				<?php echo anchor('member_home', 'logo', 'id="logo1"');?>
			
			</div>
			
			<div id="box">
			
			    <a href="#" class="btmiddle bt"><?php echo $this->session->userdata('username');?><img src="images/dn_arrow.png" id="dn_arrow"/></a>
			    
			    <?php echo anchor('login', 'log out', 'id="logout"');?>
				
				<input type="text" name="search" maxlength="255" value="search" onblur="if (this.value == '') {this.value = 'search'}"
 onfocus="if (this.value == 'search') {this.value = ''}" autocomplete="off" style="height: 25px;"/>
 
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

	
		<div id="wrapper"><!--starts wrapper-->
			
			
			<?php $this->load->view('includes/modalPanel_view', $categories); ?>



						
			<div id="nav">	
			
				<li id="create_post"><a href="#" class="modal">CREATE A POST</a></li>
				
				<?php
				
					foreach($categories as $category){
						 
						echo '<li id="'.$category->category_name.'">' .anchor('post/getCategoryPosts/'.$category->categoryId , $category->category). '</li>';
					}
				?>
				
				<li id='faq'><?php echo anchor('post', 'FAQ\'s'); ?></li>		
							
			
			</div><!--closes nav-->
			
				<div id="czip_search">
				
					<form id="city_form" autocomplete="off">
					
						<input id="city" type="text" name="search" maxlength="255" value="Country or City and State" onblur="if (this.value == '') {this.value = 'Country or City and State';}"
		 onfocus="if (this.value == 'Country or City and State') {this.value = '';}"/> &nbsp;&nbsp;&nbsp;&nbsp;
		 
						 <label id="or">or</label><input id="zip" type="text" name="search" maxlength="255" value="Zip or Postal Code" onblur="if (this.value == '') {this.value = 'Zip or Postal Code';}"
		 onfocus="if (this.value == 'Zip or Postal Code') {this.value = '';}"/>
		 
						<button id="submit" type="submit" name="button" value="search" style=" cursor:pointer;">search</button>
					
					</form><!--closes form-->
				
				</div><!--closes czip_search-->
			
			<div id="main_content">
			
			<h1 id="results_ttl">Orlando, FL</h1>
					<?php
			
			echo '<div id="search_form">';

				$options = array(
					  'choose' => 'Choose a category',

				);
			
				 echo form_open('results');				
				 echo form_label('Search for:', 'search_for'); 
				 echo form_input('search for', ' ', 'id="sinput"');
				
				 echo form_label('in', 'in_label');
				 echo form_dropdown('search_cat', $options, '', 'id="search_cat"');
				 
				 echo form_label('price:', 'price');
				 echo form_input('min price', '', 'id="min_price"');
				 echo form_input('max price', '', 'id="max_price"');
				 
				 echo form_submit('submit', 'Submit', 'id="find"');
				
				 echo form_close();
				 
			echo '</div>';
			
			?>
			<div class="notification"> Post Saved</div>
			<div>
			
				<?php $this->load->view('post_view'); ?>

			</div>
			<div id="edit_dialog" title="Edit Post">

				<form action='' id="edit_post" method="post" accept-charset="utf-8">
					
					<input type="text" name="p_title" id="p_title">
					<input type="text" name="p_email" id="p_email">
					<input type="text" name="p_price" id="p_price">
					<input type="text" name="p_location" id="p_location">
					<input type="hidden" name="p_id" id="p_id">
					<textarea id="p_desc" cols="55" rows="5"> </textarea>
					<input type="submit" value="Save Changes" id="save_changes">
				</form>
			</div>
						
			</div><!--closes main content-->

		</div><!--closes wrapper-->
		
		<?php $this->load->view('includes/footer'); ?>
		
		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script src="js/site.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
		</script>
		<script>
			var baseUrl = $('base').attr('href');
		</script> 	

					
	</body><!--closes body-->
	
</html><!--closes html-->
