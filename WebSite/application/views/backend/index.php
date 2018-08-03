<?php
//______________________________________________________________________________
// system
$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
$system_title       =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
//______________________________________________________________________________
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	<title><?php echo $page_title;?> | <?php echo 'Hajj-Smart-service';?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php include 'includes_top.php';?>
</head>
<body>
	<div class="container-fluid">
		<?php 	include 'navbar.php'; ?>
				<?php include $account_type.'/'.$page_name.'.php';?>
				<?php include 'includes_bottom.php';?>
		<?php include 'footer.php';?>
	</div>
	<?php include 'modal.php';?>
</body>
</html>
