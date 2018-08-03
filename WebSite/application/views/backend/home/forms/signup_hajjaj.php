<div class="text-center" style="background-color:#74d6ed;padding:10px;margin-buttom:10px;color:#fff;">
	<h2>Inscreption en tanque un Citoyen</h2>
</div>
<div class="container">
	<div class="row" style="padding:10px;">
		<!-- _________________________________________________________ -->
		<div class="row text-center">
			<h2>nouveau sur Hajj-Smart-Service ?
				<br>  En bas inscription facile et rapide !
			</h2>
		</div>
		<div id="first_frame" class="col-md-6 col-md-offset-3">
				<img src="<?php echo base_url() .'uploads/images/hajjaj.jpg' ?>" style="width:50%">
			<form id="form_add" action="#" method="#">
				<div class="add_alert"></div>
				<h3>Informations personnelles</h3>
				<div class="form-group">
					<input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female
				</div>
				<!--_______________________________________________________________________________________-->
			<!-- Name -->
			<div id="name-group" class="form-group">
				<label for="name"><?php echo get_phrase('name'); ?></label>
				<input type="text" class="form-control" name="name" placeholder="">
				<!-- errors will go here -->
			</div>
			<!--_______________________________________________________________________________________-->
			<!-- address -->
			<div id="address-group" class="form-group">
				<label for="address" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
				<input type="text" class="form-control" name="address" value="" >
			</div>
			<!--_______________________________________________________________________________________-->
			<!--  phone -->
			<div id="phone-group" class="form-group">
				<label for="phone"><?php echo get_phrase('phone'); ?></label>
				<input type="text" class="form-control" name="phone" placeholder="">
				<!-- errors will go here -->
			</div>
			<!--_______________________________________________________________________________________-->
			<!-- Email -->
			<div id="email-group" class="form-group">
				<label><?php echo get_phrase('username'); ?></label>
				<input type="text" class="form-control" name="username" placeholder="">
			</div>

				<div id="email-group" class="form-group">
					<input type="text" class="form-control" name="email" placeholder="email">
				</div>
				<div id="email-group" class="form-group">
					<input type="text" class="form-control" name="password" placeholder="<?php echo get_phrase('password'); ?>">
				</div>
				<div id="email-group" class="form-group">
					<input type="text" class="form-control" name="confirm_password" placeholder="<?php echo get_phrase('confirm_password'); ?>">
				</div>
				<button type="submit" class="btn btn-success btn-block"><?php echo get_phrase('create_account'); ?> <span class="fa fa-arrow-right"></span></button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	//_____________________________________________________________________
	// reset form function after submiting
	function form_reset() {
		$('#form_add :input').val('');
	}
	//_____________________________________________________________________
	$('#form_add').submit(function(){
		add();
		return false;
	});

	function add() {
		var fd = new FormData(document.querySelector('#form_add')); // using the FormData API to submit form
		$.ajax({
			type: 'post',
			url 		: '<?php echo base_url() . 'index.php?Registration/registration' ; ?>' ,
			data : fd,
			processData: false,
			contentType: false,
			dataType 	: 'json',
			encode 		: true,
			success: function (data) {
				console.log(data);
				if ( ! data.success) {
					$('.add_alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
					scroll(0, 0);
				} else {
					$('.add_alert').html('<h4><div class="alert alert-success">' + data.message + '</h4></div>');
					scroll(0, 0);
					form_reset();
					setTimeout(function() {
						$('.add_alert').html('');
						form_reset();
						location.reload();
					}, 2000);
				}
			}
		})
	}
	</script>
