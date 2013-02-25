<html>
<head>
	
	<title><?=$title?></title>
	
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
</head>
<body>

<?php $this->load->view('includes/header')?>

<div id="wrapper"><!--starts wrapper-->

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
			
			<div>
			
				<?php $this->load->view('userPosts_view'); ?>

			</div>
						
			</div><!--closes main content-->	
	
		</div>
		
		<?php $this->load->view('includes/footer') ?>
		
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
</body>

</html>