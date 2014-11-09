<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
?>
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bookie Wookie - Resources</title>
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/base-responsive.css">
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							Menu<!-- <span class="icon-th-list"> -->
						</a>
						<a href="index.blade.php" class="brand">Bookie Wookie</a>
						<? if (isLoggedIn()){ echo '<div class="btn-group pull-right">
						<button class="btn">Welcome ' .$_SESSION['SESS_FIRST_NAME'] .'</button>
						<button class="btn dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="logout.php">Logout </a></li>
						</ul>
						</div>'; } else { echo '';} ?>
						
						<div class="nav-collapse collapse">
							
							<ul class="nav pull-right">
								<li><a href="index.blade.php">Home</a></li>
								<li><a href="bookexchange.blade.php">Book Exchange</a></li>
								<? if (isLoggedIn()){ echo '<li><a href="members.php">Members</a></li>'; } else { echo ''; } ?>
								<li><a href="about.blade.php">About Us</a></li>
								
							</ul>
						</div>
					</div>	
			</div>
		</div>

		<div class="hero-unit">
			<h2>Resources</h2>
			<p>Other good sources of help</p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8 well">
					<p>Here are some links we find useful for buying and selling textbooks, or other useful book and e-book related resources:
					<br><br><a href="http://www.bcit.ca/library" target="_blank">BCIT Library</a>
					<br>Here you may be able to find required textbooks available for checkout, or additional textbooks to assist your learning.
					<br><br><a href="http://www.books24x7.com" target="_blank">Books24x7</a>
					<br>Books24x7 is a useful tool for e-books. Sign up with your my.bcit email, and you can have access to a large number of e-books for free!
					<br><br><a href="http://www.bcitbookstore.ca" target="_blank">BCIT Bookstore</a>
					<br>If you wish to purchase new and used books from the BCIT bookstore, you can check prices and availability. You can also use the website to order books for delivery or pickup. A very useful resource if you wish to purchase new textbooks.</p>
				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li class="active"><a href="resources.php">Resources</a></li>
						<li><a href="faq.blade.php">FAQ</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
						<li class="divider"></li>
						<li><a href="termbook.php">Books by term</a></li>
					</ul>
				</div>
			</div>
			<hr>
			<footer style="text-align:center">
			<p>&copy; <a href="index.blade.php">BookieWookie.com</a> 2013 || Website Designed by CST Students : <a href="about.blade.php">Jas, Shah, Daniel and Randeep</a> </p>
			</footer>

		</div>

		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>
</html>
