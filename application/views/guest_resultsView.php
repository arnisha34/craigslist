<html>

	<head>
		<title>Craigslist</title>
		
		<base href="<?php echo base_url(); ?>" />
		
		<link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
	
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.0.custom.css"/>
		
		<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
		
		<style type="text/css">
		
			html{
				background: #a0dbea;
			}
			
			@font-face {
			  font-family: 'Couture Bold';
			  src: url('COUTURE-Bold.ttf');
			}
			
		</style>
		
	</head>
	
	<body><!--starts body-->
	
		<div id="main">
		
		</div>
		
		<div id="header">
		
			<div id="logo">
			
				<?php echo anchor('guest_home', 'logo', 'id="logo1"');?>
				
			</div>
		
			<div id="box">
			
				<p id="welcome">Hello, Guest  &nbsp &nbsp<?php echo anchor('login', 'Login', 'id="login2"');?><?php echo anchor('register', 'Register', 'id="register2"'); ?></p>
				
				<input style="height: 25px" type="text" name="search" maxlength="255" value="search" onblur="if (this.value == '') {this.value = 'search'}"
 onfocus="if (this.value == 'search') {this.value = ''}" autocomplete="off"/>
 
				<button id="search_icon1" type="submit" name="button" value="search" style=" cursor:pointer">search</button>
				
				<a href="#" id="cl_link">Craigslist 411</a>
		
			</div>
		
		</div>
	
		<div id="wrapper"><!--starts wrapper-->
			
			<div id="nav">
			
			<?php
			
			$modal = array(
				'class' => 'modal',
				
			);
			
			?>
				<div id="guest_dialog" title="SO YOU WANT TO CREATE A POST!">
					
					<p><strong>Register to become a Member</strong> and start posting right away!.  </p>
					
					<p><strong>Already a member!?</strong>  Great Login Now!</p>
					
					<?php echo anchor('register', 'Register Now', 'id="nu_register"') ?>
					
					<?php echo anchor('login', 'Login Now', 'id="nu_login"') ?>
					
				</div>
				
				<li id="guest_post"><img src="images/lock.png" id="lock"><a href="#" class="modal">CREATE A POST</a></li>
				
				<li id='community'><?php echo anchor('guest_results', 'Community'); ?></li>
				<li id='housing'><?php echo anchor('guest_results', 'Housing'); ?></li>
				
				<li id='jobs'><?php echo anchor('guest_results', 'Jobs'); ?></li>
				
				<li id='for_sale'><?php echo anchor('guest_results', 'For Sale'); ?></li>

				<li id='personals'><?php echo anchor('guest_results', 'Personals'); ?></li>
				<li id='services'><?php echo anchor('guest_results', 'Services'); ?></li>
				
				<li id='discussions'><?php echo anchor('guest_results', 'Discussions'); ?></li>
				<li id='gigs'><?php echo anchor('guest_results', 'Gigs'); ?></li>
				
				<li id='resumes'><?php echo anchor('guest_results', 'Resumes'); ?></li>

				<li id='faq'><?php echo anchor('guest_results', 'FAQ\'s'); ?></li>
			
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
						
			</div><!--closes main content-->

		</div><!--closes wrapper-->
		
		<div id="footer">
		
			<p id="copy">Copyright &#169 2013 craigslist, inc.</p>
			
			<div id="info">
				<a href="#" class="info">Safety</a>
				<a href="#" class="info">Legal Stuff</a>
				<a href="#" class="info">Terms of use</a>
			</div><!--closes info-->
	
		</div><!--closes footer-->	
		
		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
		<script type="text/javascript" src="js/site.js"></script>	
					
	</body><!--closes body-->
	
</html><!--closes html-->
