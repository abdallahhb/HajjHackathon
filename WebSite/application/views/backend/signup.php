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
	<style>
		img{
			max-height: 150px;
		}
	</style>
</head>
<body>
	<!--____________________________________________________________________________________________________-->
	<div class="text-center" style="background-color:#74d6ed;padding:10px;margin-buttom:10px;color:#fff;">
		<p>تسجيل حساب</p>
	</div>
	<div class="container">
		<div class="row" style="padding:10px;">
			<!-- _________________________________________________________ -->
			<div class="row text-center">
				<h2>nouveau sur Hajj-Smart-Service ?
					<br>  En bas inscription facile et rapide !
				</h2>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="thumbnail">
						<div class="text-center" style="background-color:#74d6ed;padding:10px;margin-buttom:10px;color:#fff;">
							<p>وكالة نقل</p>
						</div>
							<img src="<?php echo base_url() .'uploads/images/car.jpg' ?>" alt="Lights" style="width:100%">
								<div class="text-center" style="background-color:blue;padding:10px;margin-buttom:10px;color:#fff;">
									<p>تسجيل حساب</p>
								</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<div class="text-center" style="background-color:#74d6ed;padding:10px;margin-buttom:10px;color:#fff;">
							<p>مستشفى</p>
						</div>
							<img src="<?php echo base_url() .'uploads/images/hospital.jpg' ?>" alt="Lights" style="width:100%">
								<div class="text-center" style="background-color:blue;padding:10px;margin-buttom:10px;color:#fff;">
									<p>تسجيل حساب</p>
								</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<div class="text-center" style="background-color:#74d6ed;padding:10px;margin-buttom:10px;color:#fff;">
							<p>المطوف</p>
						</div>
							<img src="<?php echo base_url() .'uploads/images/motawaf.jpg' ?>" alt="Lights" style="width:100%">
								<div class="text-center" style="background-color:blue;padding:10px;margin-buttom:10px;color:#fff;">
									<p>تسجيل حساب</p>
								</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<div class="text-center" style="background-color:#74d6ed;padding:10px;margin-buttom:10px;color:#fff;">
							<p>فندق</p>
						</div>
						<a href="/w3images/lights.jpg" target="_blank">
							<img src="<?php echo base_url() .'uploads/images/hotel.jpg' ?>" alt="Lights" style="width:100%">
								<div class="text-center" style="background-color:blue;padding:10px;margin-buttom:10px;color:#fff;">
									<p>تسجيل حساب</p>
								</div>
						</a>
					</div>
				</div>
			</div>
			</div>
		</div>
		<script>
		// $("#first_frame").hide();
		// $("#second_frame").hide();
		$("#show_first_frame").click(function(){
			$("#first_frame").show();
		});

		$(".hide_first_frame").click(function(){
			$("#first_frame").hide();
		});

		$("#show_second_frame").click(function(){
			$("#second_frame").show();
		});
		$(".hide_second_frame").click(function(){
			$("#second_frame").hide();
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
					url 		: '<?php echo base_url() . 'index.php?registration/ajax_login' ; ?>' , // the url where we want to POST
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
					url 		: '<?php echo base_url() . 'index.php?registration/contact_us' ; ?>' , // the url where we want to POST
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
</body>
</html>
