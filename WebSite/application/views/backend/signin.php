<!DOCTYPE html>
<html lang="en" dir="<?php echo $text_dir ;?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="IMadrasati" />
	<meta name="author" content="" />
	<!--____________________________________________________________________________________________________-->
	<!-- stylesheets -->
	<?php include 'includes_top.php';?>
	<!--____________________________________________________________________________________________________-->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
</head>
<body>
	<!--____________________________________________________________________________________________________-->
	<?php include 'navbar.php';?>
	<!--____________________________________________________________________________________________________-->
	<div class="text-center" style="background-color:#74d6ed;padding:10px;margin:10px 0;color:#fff;">
		<p>Login</p>
	</div>
	<div class="container">
		<div class="row text-center">
			<!-- <a href="#" type="button" class="btn btn-facebook" style="background-color:#74d6ed;margin:0 5px;"><i class="fa fa-facebook-square" style="font-size:25px;color:#fff;"></i> Se connecter avec Facebook</a> -->
			<a href="#" type="button" class="btn btn-facebook" style="background-color:#74d6ed;"><i class="fa fa-google-plus-square" style="font-size:25px;color:#fff;"></i> Se connecter avec Google</a>
		</div>
		<div class="row" style="padding:10px;">
			<!-- _________________________________________________________ -->.
			<!-- login -->
			<div class="col-md-6 col-md-offset-3" style="background-color:#74d6ed;">
				<div class="text-center">
					<h3>
						<strong>
							Did you use  Hajj-Smart-Service ?
						</strong>
					</h3>
					<p>
						<strong>
							thank you for identifying
						</strong>
					</p>
				</div>
				<form id="login_form" action="#" method="#">
					<div class="alert"></div>
					<!-- Admin EMAIL -->
					<div id="email_user_name-group" class="form-group">
						<p><label for="password"><?php echo get_phrase('user_namee_or_email'); ?></label></p>
						<input type="text" class="form-control" name="email_user_name" placeholder="<?php echo get_phrase('user_namee_or_email'); ?>">
						<!-- errors will go here -->
					</div>
					<!-- Admin Password -->
					<div id="password-group" class="form-group">
						<p><label for="password"><?php echo get_phrase('password'); ?></label></p>
						<div class="input-group">
							<input id="password" class="form-control password" name="password" placeholder="password">
							<span class="input-group-btn" id="showHide">
								<button id= "show_password" class="btn btn-secondary" type="button">
									<span class="glyphicon glyphicon-eye-open"></span>
								</button>
							</span>
						</div>
					</div>

					<a href="<?php echo base_url();?>index.php?login/forgot_password" class="btn btn-danger" style="float: right;">
						You do not have an account ?
					</a>
					<br>
					<br>
					<button type="submit" class="btn btn-success btn-block"><?php echo get_phrase('login'); ?></button>
				</form>
				<br>
				<div class="row">
					<p class="text-center">Vous n'avez pas de compte ?</p>
					<a href="<?php echo base_url() . 'index.php?home/signup'; ?>" class="btn btn-info  btn-block">
						<?php echo get_phrase('sign_up'); ?>
					</a>
				</div>
			</div>

		</div>
	</div>
	<script>
	$(document).ready(function() {
		$('button[type=submit], input[type=submit]').prop('disabled',false);
		// process the form
		$('#login_form').submit(function(event) {
			$('.form-group').removeClass('has-error'); // remove the error class
			$('.help-block').remove(); // remove the error text
			$('#register-alerts').remove(); // remove the error text
			$('form').removeClass('alert-success');
			// get the form data
			// there are many ways to get this data using jQuery (you can use the class or id also)
			var formData = {
				'email_user_name'  : $('input[name=email_user_name]').val(),
				'password' 			   : $('input[name=password]').val()
			};
			// process the form
			$.ajax({
				type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
				url 		: '<?php echo base_url() . 'index.php?login/ajax_login' ; ?>' , // the url where we want to POST
				data 		: formData, // our data object
				dataType 	: 'json', // what type of data do we expect back from the server
				encode 		: true
			})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data);

				// here we will handle errors and validation messages
				if (!data.ok) {

					if (data.errors.email_user_name) {
						$('#email_user_name-group').addClass('has-error'); // add the error class to show red input
						$('#email_user_name-group').append('<div class="help-block">' + data.errors.email_user_name + '</div>'); // add the actual error message under our input
					}

					// handle errors for name ---------------
					if (data.errors.password) {
						$('#password-group').addClass('has-error'); // add the error class to show red input
						$('#password-group').append('<div class="help-block">' + data.errors.password + '</div>'); // add the actual error message under our input
					}

					//	alert(data.errors);
					$('.alert').html('<p><div class="alert alert-danger">' + data.message + '</p></div>');
					scroll(0, 0);
					// window.location.href = data.location; // redirect a user to another page

				} else {
					if (!data.success) {
						$('.alert').html('<p><div class="alert alert-danger">' + data.message + '</p></div>');
						setTimeout(function() {
							// window.location.href = data.location; // redirect a user to another page
						}, 2000);
					}else{
						$('.alert').html('<p><div class="alert alert-success">' + data.message + '</p></div>');
						window.location.href = data.location; // redirect a user to another page
					}
				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

			// stop the form from submitting the normal way and refreshing the page
			event.preventDefault();
		});


		// process the form
		$('#contuct_us_form').submit(function(event) {
			//  alert("Thank you for your hhh!");
			$('.form-group').removeClass('has-error'); // remove the error class
			$('.help-block').remove(); // remove the error text
			$('#register-alerts').remove(); // remove the error text
			$('form').removeClass('alert-success');
			// get the form data
			// there are many ways to get this data using jQuery (you can use the class or id also)
			var formData = {
				'contuct_name' 	     : $('input[name=contuct_name]').val(),
				'contuct_email' 		 : $('input[name=contuct_email]').val(),
				'contuct_phone' 	   : $('input[name=contuct_phone]').val(),
				'contuct_message' 	 : $('textarea[name=contuct_message]').val()
			};

			// process the form
			$.ajax({
				type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
				url 		: '<?php echo base_url() . 'index.php?Home/contact_us' ; ?>' , // the url where we want to POST
				data 		: formData, // our data object
				dataType 	: 'json', // what type of data do we expect back from the server
				encode 		: true
			})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data);

				// here we will handle errors and validation messages
				if ( ! data.success) {
					//	alert(data.errors);
					$('.contuct_us_alert').html('<p><div class="alert alert-danger">' + data.message + '</p></div>');
				} else {
					$('.contuct_us_alert').html('<p><div class="alert alert-success">' + data.message + '</p></div>');
					setTimeout(function() {
						location.reload();
					}, 1000);
				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

			// stop the form from submitting the normal way and refreshing the page
			event.preventDefault();
		});
		// $('#contuct_us_form').reset();


		$("#showHide").click(function () {
			if ($(".password").attr("type")=="password") {
				$(".password").attr("type", "text");
			}
			else{
				$(".password").attr("type", "password");
			}

		});
	});
	</script>
</body>
</html>
</body>
</html>
