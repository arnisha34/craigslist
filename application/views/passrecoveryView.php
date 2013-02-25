<!DOCTYPE html>

<html>

	<head>
	
		<title>Craigslist</title>
		
		<base href="<?php echo base_url(); ?>" />
		
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		
		<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
		
	</head>
	
	<body><!--starts body-->

		<div id="wrapper"><!--starts wrapper-->

			
			<div id="pass_recovery">
				
				<form id="pass_rec">
				
					<?php
					
						$username = array(
							'name' => 'username',
							'id' => 'send_username',
							'autocomplete' => 'off',
							'onclick' => "this.value=''",
							'focusout' => 'this.value="username"',
						 );
						 
						 $email = array(
							'name' => 'email',
							'id' => 'send_email',
							'autocomplete' => 'off',
							'onclick' => "this.value=''",
							'focusout' => 'this.value="email"',
						 );
						 
						 $email_password = array(
						 	'id' => 'send_password'
						 );
						 
						echo form_open('pass_recovery/email_credentials');
						
						echo form_label('Username:', 'user_label');
						echo form_input($username);
						echo form_error('username', '<p class="send_user">', '</p>');
						
						echo form_label('Email:', 'email_label');
						echo form_input($email);
						echo form_error('email', '<p class="send_email">', '</p>');
	
						echo form_submit($email_password);
						
						echo form_close();
					?>
					
			</div><!--closes pass_recovery-->
			
			<div id="register">
			
				<p id="rec_p">Didn't forget your password?</p>
				
				<?php echo anchor('login', 'Login >', 'id="login_link1"');?> 
				<?php echo anchor('register', 'Register >', 'id="register_link1"');?>
			
			</div><!--closes member-->

			
			</div><!--closes register-->
			
			<div id="guest">
			
				<?php echo anchor('guest_home', 'Continue as a guest', 'id="guest_link"');?>
			
			</div><!--closes guest-->
			
		</div><!--closes wrapper-->
		
	</body><!--closes body-->

	
</html><!--closes html-->
