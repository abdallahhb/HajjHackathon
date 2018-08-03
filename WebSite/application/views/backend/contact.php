<div class="container">
	<div class="row">
		<div class="container-fluid">
			<div class="row box_content_gray">
				<h2>
					Contact Us
				</h2>
				<div id="hr_colored_div"></div>
				<p>
					<strong>Suggestion, note, contact, support.</strong><br /><br />
					<strong>Hajj-Smart-service</strong>
					is an innovative platform that allows you to communicate with all government and private entities and get the latest news and news and all free!
				</p>
				<form id="form_contact" action="#" method="#">
					<div class="contact_alert"></div>
					<div class="row form-group">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="fname" value="" placeholder="Prenom">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="lname" value="" placeholder="Nom">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="email" value="" placeholder="Adress Email">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="phone" value="" placeholder="Telephone">
						</div>
					</div>

					<div class="form-group">
						<select name="contact_type_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
							<option value=""><?php echo get_phrase('Votre Message Concerne ....');?></option>
							<option value="1"><?php echo get_phrase('consultation');?></option>
						</select>
					</div>

					<div class="form-group">
						<textarea name="message" class="form-control" rows="8" cols="80" placeholder="<?php echo get_phrase('ecrire votre message');?>"></textarea>
					</div>

					<button type="submit" class="btn btn-success btn-block"><?php echo get_phrase('Send'); ?> <span class="fa fa-arrow-right"></span></button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
function form_reset() {
	$('#form_contact :input').val('');
}
//_____________________________________________________________________
$('#form_contact').submit(function(){
	contact();
	return false;
});

function contact() {
	var fd = new FormData(document.querySelector('#form_contact'));
	$.ajax({
		type: 'post',
		url 		: '<?php echo base_url() . 'index.php?home/contact_add' ; ?>' ,
		data : fd,
		processData: false,
		contentType: false,
		dataType 	: 'json',
		encode 		: true,
		success: function (data) {
			console.log(data);
			if ( ! data.success) {
				$('.contact_alert').html('<h4><div class="alert alert-danger">' + data.message + '</h4></div>');
				scroll(0, 0);
			} else {
				$('.contact_alert').html('<h4><div class="alert alert-success">' + data.message + '</h4></div>');
				scroll(0, 0);
				form_reset();
				setTimeout(function() {
					$('.contact_alert').html('');
					form_reset();
					location.reload();
				}, 2000);
			}
		}
	})
}
</script>
