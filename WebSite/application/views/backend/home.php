<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<title>Hajj-Smart-service</title>
	<?php include 'includes_top.php';?>
</head>
<body class="amiri">
	<!-- ________________________________________________________________________________ -->
	<?php include 'navbar.php';?>
	<?php include 'first_desktop.php'; ?>
	<!-- ________________________________________________________________________________ -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php include 'carousel_home.php'; ?>
		</div>
	</div>
</div>
	<!-- ________________________________________________________________________________ -->
	<div class="container">
		<div class="text-center">
			<h2>Our partners</h2>
		</div>
		<div class="row text-center">
			<div class="col-md-12">
				<div class="container">
					<div class="carousel slide multi-item-carousel" id="theCarousel" style="padding:0 50px;">
						<div class="carousel-inner" style="padding:0 120px;">
							<div class="item active">
								<div class="col-xs-4"><a href="#1"><img src="uploads/partners/1.jpg" class="img-responsive"></a></div>
							</div>
							<div class="item">
								<div class="col-xs-4"><a href="#1"><img src="uploads/partners/2.jpg" class="img-responsive"></a></div>
							</div>
							<div class="item">
								<div class="col-xs-4"><a href="#1"><img src="uploads/partners/3.jpg" class="img-responsive"></a></div>
							</div>
							</div>
						<a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
						<a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
		<br>
<script type="text/javascript">
// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
var next = $(this).next();
if (!next.length) {
	next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

if (next.next().length>0) {
	next.next().children(':first-child').clone().appendTo($(this));
} else {
	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
}
});
</script>
	<!-- ________________________________________________________________________________ -->
	<?php include 'welcome_footer.php';?>
	<!-- ________________________________________________________________________________ -->

</body>
</html>
