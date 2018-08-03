<!DOCTYPE html>
<html lang="en" dir="<?php echo $text_dir ;?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="IMadrasati" />
	<meta name="author" content="" />
	<title><?php echo get_phrase('who_we_are');?> | <?php echo $system_title;?></title>
	<!--____________________________________________________________________________________________________-->
	<!-- stylesheets -->
	<?php include 'includes_top.php';?>
	<!--____________________________________________________________________________________________________-->
	<link rel="shortcut icon" href="assets/images/favicon.png">
</head>
<body>
	<!--____________________________________________________________________________________________________-->
	<!-- Navbar : -->
	<?php include 'navbar.php';?>
	<!--____________________________________________________________________________________________________-->
	<div class="container">
		<div class="row">
			<a href="#" type="button" class="btn btn-facebook" style="background-color:#f1f1f1;float: right;margin:0 5px;"><i class="fa fa-facebook-square" style="font-size:25px;color:red"></i> Se connecter avec Facebook</a>
			<a href="#" type="button" class="btn btn-facebook" style="background-color:#f1f1f1;float: right;"><i class="fa fa-google-plus-square" style="font-size:25px;color:red"></i> Se connecter avec Google</a>
		</div>
		<div class="row" style="padding:10px;">
			<!-- _________________________________________________________ -->.
			<!-- login -->
			<div class="col-md-6 text-center" style="background-color:#f9f9f9;">
				<h2>Vous avez utilisez Saht-Teck ?</h2>
				<h4>merci de vous identifier</h4>
				<form id="login_form" action="#" method="#">
				<div class="alert"></div>
				<!-- Admin EMAIL -->
				<div id="email_user_name-group" class="form-group">
					<h4><?php echo get_phrase('user_namee_or_email'); ?></h4>
					<input type="text" class="form-control" name="email_user_name" placeholder="<?php echo get_phrase('user_namee_or_email'); ?>">
					<!-- errors will go here -->
				</div>
				<!-- Admin Password -->
				<div id="password-group" class="form-group">
					<h4><label for="password"><?php echo get_phrase('password'); ?></label></h4>
					<input type="password" class="form-control password" name="password" data-toggle="password"
					placeholder="<?php echo get_phrase('password'); ?>">
				</div>
				<button type="button" class="btn btn-default btn-sm float-right" id="showHide">
					<?php echo get_phrase('show_hide_password'); ?>
				</button>
				<button type="submit" disabled  style="width:100%;" class="btn btn-success"><?php echo get_phrase('login'); ?><span class="fa fa-arrow-<?php echo $text_align ;?>"></span></button>
			</form>
				<h4>
					Vous avez perdez votre mot de passe ? <a href="#">Cliquer ici</a>
				</h4>
			</div>
			<!-- / login -->
			<!-- _________________________________________________________ -->
			<div class="col-md-6">
				<div id="main_frame" class="frame">
					<div class="text-center">
						<h2>Nouvau Sur Saht-Teck ?</h2>
						<p style="color:green;">l'inscreption gratuit !</p>
					</div>
					<div id="to_first_frame" class="row" style="border:1px #f4511e solid;margin:5px 0;" >
						<div class="col-xs-2">
							<img src="uploads/welcome/doctor.png" class="img-circle" style="height:80px;vertical-align:middle;" alt="">
						</div>
						<div class="col-xs-10">
							<h2>Vous etre un passiant ?</h2>
							<h4>trouver rapidement un médecin ou un dentiste proche de chez vous et de prendre rendez-vous en ligne gratuitement.</h4>
						</div>
					</div>
					<div id="to_second_frame" class="row" style="border:1px #f4511e solid;margin:5px 0;" >
						<div class="col-xs-2">
							<img src="uploads/welcome/doctor.png" class="img-circle"  style="height:80px;vertical-align:middle;" alt="">
						</div>
						<div class="col-xs-10">
							<h2>Vous êtes professionnel de santé ?</h2>
							<h4>
								Partagez vos disponibilités en temps réel avec vos patients selon vos critères, tout en gardant la main sur votre agenda médical.
							</h4>
						</div>
					</div>
				</div>
				<div id="first_frame" class="frame text-center">
					<h3>Vous êtes un patient ? </h3>
					<h4>Merci de saisir vos informations</h4>
					<form action="#" method="#">
						<div class="alert"></div>

						<div id="fname-group" class="form-group">
							<div class="row">
								<div class="col-xs-4">
									<input type="radio" name="gender" value="male"> Male<br>
								</div>
								<div class="col-xs-4">
									<input type="radio" name="gender" value="female"> Female<br>
								</div>
							</div>
						</div>
						<div id="fname-group" class="form-group">
							<input type="text" class="form-control" name="fname" placeholder="<?php echo get_phrase('fname'); ?>">
						</div>
						<div id="parent_name-group" class="form-group">
							<input type="text" class="form-control" name="parent_name" placeholder="<?php echo get_phrase('name'); ?>">
						</div>
						<div id="profession-group" class="form-group">
							<input type="text" class="form-control" name="profession" value="" placeholder="<?php echo get_phrase('profession');?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" value="" placeholder="<?php echo get_phrase('address');?>" style="background: url(icons/user.png) no-repeat;padding-left:30px;">
						</div>
						<div id="phone-group" class="form-group">
							<input type="text" class="form-control" name="phone" placeholder="<?php echo get_phrase('phone'); ?>">
						</div>
						<div id="email-group" class="form-group">
							<input type="text" class="form-control" name="email" placeholder="phone">
						</div>
						<div id="email-group" class="form-group">
							<input type="text" class="form-control" name="email" placeholder="<?php echo get_phrase('email_or_username'); ?>">
						</div>
						<div id="email-group" class="form-group">
							<input type="text" class="form-control" name="email" placeholder="<?php echo get_phrase('password'); ?>">
						</div>
						<button type="submit" style="width:100%;" class="btn btn-success"><?php echo get_phrase('create_account'); ?> <span class="fa fa-arrow-right"></span></button>
					</form>
					<div class="row">
						<button class="btn btn-info btn-block to_main_frame">Anuller</button>
					</div>
				</div>
				<div id="second_frame" class="frame">
					<div class="row text-center">
						<button type="button" class="btn btn-success" name="button">Category</button>
					</div>
					<div class="row text-center">
						<button type="button" class="btn btn-info" name="button">Vous ètre Installé ?</button>
						<button type="button" class="btn btn-info" name="button">Vous ètre Remplaçant ?</button>
					</div>
					<br>
						<button class="btn btn-info btn-block to_main_frame">Anuller</button>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<?php include 'welcome_footer.php';?>

	<script>
	$("#main_frame").show();
	$("#first_frame").hide();
	$("#second_frame").hide();

	$(".to_main_frame").click(function(){
		$("#first_frame").hide();
		$("#second_frame").hide();
		$("#main_frame").show();
	});
	$("#to_first_frame").click(function(){
		$("#main_frame").hide();
		$("#first_frame").show();
	});
	$("#to_second_frame").click(function(){
		$("#main_frame").hide();
		$("#second_frame").show();
	});

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
				url 		: '<?php echo base_url() . 'index.php?Home/ajax_login' ; ?>' , // the url where we want to POST
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
					$('.alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
					scroll(0, 0);
					// window.location.href = data.location; // redirect a user to another page

				} else {
					if (!data.success) {
						$('.alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
						setTimeout(function() {
							// window.location.href = data.location; // redirect a user to another page
						}, 2000);
					}else{
						$('.alert').html('<h4><div class="alert alert-success">' + data.message + '</h4></div>');
						// setTimeout(function() {
						window.location.href = data.location; // redirect a user to another page
						// }, 2000);
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
					$('.contuct_us_alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
				} else {
					$('.contuct_us_alert').html('<h4><div class="alert alert-success">' + data.message + '</h4></div>');
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
