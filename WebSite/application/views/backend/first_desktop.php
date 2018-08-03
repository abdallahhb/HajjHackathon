<style type="text/css">
html, body {
	height: 100%;
	margin-top: -20px;
}
.count
{
	color:#fff;
	text-align: center;
	font-size:25px;
}

.bbbb {
	background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url("uploads/images/first_desctop.jpg");
	height: 100%;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	color:#fff;
	padding-top:50px;
}
</style>
<div class="bbbb row text-center">
	<div  class="container-fluid text-center">
		<h3 class="ruqaa">new on Hajj-Smart-Service?<br> easy and fast registration!</h3>
		<div class="row text-center">
			<div class="col-md-4 col-md-offset-2">
				<a href="<?php echo base_url() . 'index.php?registration/signin'; ?>" class="btn btn-success btn-md">
					<h3 class="ruqaa">Login</h3>
				</a>
			</div>
			<div class="col-md-4">
				<a data-toggle="modal" data-target="#signup_type_choose" class="btn btn-info btn-md">
					<h3 class="ruqaa">Registration</h3>
				</a>
			</div>
		</div>
		<br>
		<br>
		<br>
	</div>
</div>
<br>
<script>
$('.count').each(function () {
	$(this).prop('Counter',0).animate({
		Counter: $(this).text()
	}, {
		duration: 2500,
		easing: 'swing',
		step: function (now) {
			$(this).text(Math.ceil(now));
		}
	});
});
</script>
