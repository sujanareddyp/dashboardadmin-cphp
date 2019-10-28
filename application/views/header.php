<html>
	<head>
		<title>
			My home
		</title>
		<link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
		<script src="<?php echo BASEURL;?>assets/js/jquery.min.js" ></script>
		<script src="<?php echo BASEURL;?>assets/js/bootstrap.js" ></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-8">
					<!--<ul class="nav nav-pills">----before maintaining routes
						<li><a href="<?php //echo BASEURL;?>index.php/main/homepage">Home</a></li>
						<li><a href="<?php// echo BASEURL;?>index.php/main/aboutpage">About</a></li>
						<li><a href="<?php// echo BASEURL;?>index.php/main/servicepage">Services</a></li>
						<li><a href="<?php //echo BASEURL;?>index.php/main/portfoliopage">Portfolio</a></li>
						<li><a href="<?php //echo BASEURL;?>index.php/main/contactpage">Contact</a></li>
					</ul>--->
					
					<!----after maintaining routes ur url changes to below ---->
					<ul class="nav nav-pills">
						<li><a href="home.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="service.php">Services</a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
				</div>
			</div><!---1st  row closes--->