<!DOCTYPE html>

<html>

	<head>
	
		<title>Craigslist</title>
		
		<base href="<?php echo base_url(); ?>" />
		
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		
		
		<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
		
		<style>
			@media screen and (-webkit-min-device-pixel-ratio:0) {
	
				#guest1{
				
				    margin-top: -15px; !important;
				}
				
				#member{
					
					margin-top: -16px;
				}
				
			}		
		</style>
		
	</head>
	
	<body><!--starts body-->

	
		<div id="wrapper"><!--starts wrapper-->
		
			<div id="registration">
				
				<div id="reg_form">
				
					<?php
					
						$username = array(
							'name' => 'username',
							'id' => 'username',
							'autocomplete' => 'off',
							'onclick' => "this.value=''"
						);
						
						$password= array(
							'name' => 'password',
							'id' => 'password',
							'autocomplete' => 'off',
							 'onclick' => "this.value=''"
						);
						
						$pass_conf= array(
							'name' => 'password',
							'id' => 'pass_conf',
							'autocomplete' => 'off',
							 'onclick' => "this.value=''"
						);
			
						$email= array(
							'name' => 'email',
							'id' => 'email',
							'autocomplete' => 'off',
							 'onclick' => "this.value=''"
						);
						
						$submit= array(
							'name' => 'submit',
							'id' => 'reg'
						);
						
						echo form_open('register/newUser');
						echo form_label('Username:');
						echo form_input($username);
						echo form_error('username', '<p class="username">', '</p>');
						
						echo form_label('Password:');
						echo form_password($password);
						echo form_error('password', '<p class="password">', '</p>');
/*
						echo form_label('Password Again:','pass_conf');
						echo form_password($pass_conf);
						echo form_error('pass_conf', '<p class="pass_conf">', '</p>');
*/

						echo form_label('Email:', 'email');
						echo form_input($email);
						echo form_error('email', '<p class="email">', '</p>');
						
						echo form_submit($submit);
						
						echo form_close();

					?>
									 				 
				</form><!--closes form-->
			
			</div><!--closes registration-->
			
			<div id="member">
			
				<p>Already A member Log in!</p>
				
				<?php echo anchor('login', 'Login >', 'id="login_link"')?> 
			
			</div><!--closes member-->
			
			<div id="guest1">
			
				<?php echo anchor('guest_home', 'Continue as a guest', 'id="guest_link"');?>

			</div><!--closes guest1-->

		</div><!--closes wrapper-->
		
	</body><!--closes body-->
	
</html><!--closes html-->
