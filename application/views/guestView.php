<html>

	<head>
		<title>Craigslist</title>
		
		<base href="<?php echo base_url(); ?>" />
		
		<link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.0.custom.css"/>
			
			
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		
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
			
			<div id="main_content" style="margin-bottom: 30px;">
			
				<div id="da-slider" class="da-slider">
				
				<div class="da-slide">
					<h2 style="color:#1098c1">Craigslist TV</h2>
					<p>Craigslist TV is a unique and exciting webseries from Craigslist & documentary filmmakers. <strong>Real people, real postings</strong></p>
					<a href="http://craigslist-tv.com/" class="da-link">Read more</a>
					<div class="da-img"><img src="images/tv2.png" alt="craigslist tv" /></div>
				</div>
				
				<div class="da-slide">
				
					<h2 style="color: #ef5337"><strong>Craig</strong>Connects</h2>
					<p>Using technology to give the voiceless a <strong>real</strong> voice and the powerless <strong>real</strong> power.</p>
					<a href="http://craigconnects.org/" class="da-link">Read more</a>
					<div class="da-img"><img src="images/craig.png" alt="craig connect" /></div>
				</div>
				
				<div class="da-slide">
				
					<h2 style="color: #5a843a">Craigslist Blog</h2>
					<p>Stay informed on important and <strong>not</strong> so important stuff!</p>
					<a href="http://blog.craigslist.org/" class="da-link">Read more</a>
					<div class="da-img"><img id="paper"src="images/paper.png" alt="blog" /></div>
				
				</div>
				<div class="da-slide">
	
					<h2 style="color: #6f2c8b">Craigslist Joe</h2>
					<p><strong>31 days</strong> > <strong>no money</strong> > <strong>no contacts</strong> > <strong>endless possibilities</strong></p>
					<a href="http://www.craigslistjoe.com/" class="da-link">Read more</a>
					<div class="da-img"><img id="movie"src="images/lens.png" alt="movie" /></div>
							
			</div>
				
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
				
			</div>
			
			<h1 style="color: #404041">BEST SELLERS</h1>
			
			<div id="best_sellers">
			
				<div id="ipod">
					<h4><a href="#">Apple iPod Touch 4th Gen</a></h4>
					<img src="images/ipod.png" alt="ipod"/>
				</div>
				
				<div id="sgalaxy">
					<h4><a href="#">Samsung Galaxy S3</a></h4>
					<img src="images/s3.png" alt="samsung s3"/>
				</div>
				
				<div id="xbox">
					<h4><a href="#">Microsoft Xbox 360</a></h4>
					<img src="images/xbox.png" alt="xbox"/>
				</div>
				
			</div><!--closes best sellers-->
			
			<div id="deals">
				
				<div id="dotd">
				
					<h1 id="deal" style="color: #404041">DEAL OF THE DAY</h1>
					<img src="images/ipad.png" alt="ipad"/>
					<p><a href="#"><strong id="ipad_link">Apple iPad Mini</strong><br /><br />$299.00 + shipping</a></p>
				</div>
				
				<div id="cl_app">
					<h1 id="app" style="color: #404041">GET THE APP</h1>
					<img src="images/phone.png" />
					<p>Enjoy Craigslist on the go with our new <strong id="app_link">mobile app</strong><br /><br /><a href="#">Get it now ></a></p>
				</div>
				
			</div><!--closes deals-->
			
			</div><!--closes main content-->

		</div><!--closes wrapper-->
		
		<div id="footer" style="margin-top: 120px;">
		
			<p id="copy">Copyright &#169 2013 craigslist, inc.</p>
			
			<div id="info">
				<a href="#" class="info">Safety</a>
				<a href="#" class="info">Legal Stuff</a>
				<a href="#" class="info">Terms of use</a>
			</div><!--closes info-->
	
		</div><!--closes footer-->	
		
		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript" src="js/site.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});			
			});
		</script>	
					
	</body><!--closes body-->
	
</html><!--closes html-->
