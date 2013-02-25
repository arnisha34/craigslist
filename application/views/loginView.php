<!Doctype html>

<html>

	<head>
	
		<title>Welcome To Craigslist</title>
		
		<base href="<?php echo base_url(); ?>" />
		
		<link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
		
	</head>
	
	<body><!--starts body-->

		<div id="wrapper"><!--starts wrapper-->

			<div id="login_form">
			
				
				<?php 
					
					if (isset($_GET['msg'])){
						echo "<div id='error'><p>".$_GET['msg']."</p></div>";
					}
					$username = array(
						'name' => 'username',
						'id' => 'username',
						'autocomplete' => 'off',
						'onclick' => "this.value=''",
					);
					
					$password= array(
						'name' => 'password',
						'id' => 'password',
						'autocomplete' => 'off',
						 'onclick' => "this.value=''",
					);
					
					
					$login = array(
						'name' => 'login',
						'id' => 'login',
					);

					echo form_open('login/validate_user');
					
					echo form_label('Username:');
					echo form_input($username);
					echo form_error('username', '<p class="val_user">', '</p>');

					echo form_label('Password:');
					echo form_password($password);
					echo form_error('password', '<p class="val_pass">', '</p>');

					echo anchor('pass_recovery', 'Forgot Password?', 'id="forgot"');
					echo form_submit($login);
					
					echo form_close();
				
				?>
				
			</div><!--closes login-->
			
			<div id="register">
					
				<p>New to Craigslist join now it's FREE!</p>
					
				<?php echo anchor('register', 'Register >', 'id="register_link"') ?>
			
			</div><!--closes register-->
			
			<div id="guest">
			
				<?php echo anchor('guest_home', 'Continue as a guest', 'id="guest_link"');?>

			</div><!--closes guest-->
			
		</div><!--closes wrapper-->
		
	</body><!--closes body-->

</html><!--closes html-->