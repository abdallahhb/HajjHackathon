<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa_navbar {
	padding: 8px;
	font-size: 20px;
	width: 40px;
	height:40px;
	text-align: center;
	text-decoration: none;
	margin: 5px 2px;
	border-radius: 50%;
}

.fa:hover {
	opacity: 0.7;
}

.fa-facebook {
	background: #3B5998;
	color: white;
}

.fa-twitter {
	background: #55ACEE;
	color: white;
}

.fa-google {
	background: #dd4b39;
	color: white;
}

.fa-linkedin {
	background: #007bb5;
	color: white;
}

.fa-youtube {
	background: #bb0000;
	color: white;
}

.fa-instagram {
	background: #125688;
	color: white;
}

.fa-pinterest {
	background: #cb2027;
	color: white;
}

.fa-snapchat-ghost {
	background: #fffc00;
	color: white;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
	background: #00aff0;
	color: white;
}

.fa-android {
	background: #a4c639;
	color: white;
}

.fa-dribbble {
	background: #ea4c89;
	color: white;
}

.fa-vimeo {
	background: #45bbff;
	color: white;
}

.fa-tumblr {
	background: #2c4762;
	color: white;
}

.fa-vine {
	background: #00b489;
	color: white;
}

.fa-foursquare {
	background: #45bbff;
	color: white;
}

.fa-stumbleupon {
	background: #eb4924;
	color: white;
}

.fa-flickr {
	background: #f40083;
	color: white;
}

.fa-yahoo {
	background: #430297;
	color: white;
}

.fa-soundcloud {
	background: #ff5500;
	color: white;
}

.fa-reddit {
	background: #ff5700;
	color: white;
}

.fa-rss {
	background: #ff6600;
	color: white;
}
</style>

<nav class="navbar navbar-default navbar-fixed-top ruqaa">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#myPage">
				<img src="uploads/logo.png" alt="Paris"style="height:70px;margin-top:-15px;">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url() ; ?>">Home</a></li>
				<li><a href="<?php echo base_url() . 'index.php?home/about'; ?>">About</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() . 'index.php?registration/signin'; ?>"><p style="color:#000;">Sign in</p></a></li>
						<li><a data-toggle="modal" data-target="#signup_type_choose"><p style="color:#000;">Sign Up</p></a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url() . 'index.php?home/contact'; ?>">Contact</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<a href="https://www.facebook.com/SahtiTeck" class="fa fa_navbar fa-facebook"></a>
		<a href="https://www.twitter.com/SahtiTeck" class="fa fa_navbar fa-twitter"></a>
		<a href="https://www.google.com/SahtiTeck" class="fa fa_navbar fa-google"></a>
		<a href="https://www.linkedin.com/SahtiTeck" class="fa fa_navbar fa-linkedin"></a>
		<a href="https://www.youtube.com/SahtiTeck" class="fa fa_navbar fa-youtube"></a>
	</div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
