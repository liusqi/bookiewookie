
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bookie Wookie - About Us</title>
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
								<ul class="nav pull-right">
								<li><a href="index.blade.php">Home</a></li>
								<li><a href="bookexchange.blade.php">Book Exchange</a></li>
								<? if (isLoggedIn()){ echo '<li><a href="members.php">Members</a></li>'; } else { echo ''; } ?>
								<li class="active"><a href="about.blade.php">About Us</a></li>
								
							</ul>
							</ul>
						</div>
					</div>	
			</div>
		</div>

		<div class="hero-unit">
			<h2> About</h2>
			<p>The one stop shop for all your book needs </p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8 well">
					<h4>About us</h4>
					<p>The creators of <a href="index.blade.php">www.bookiewookie.com</a> are Jas, Shah, Daniel and Randeep. We created this website as our term project for the COMP1536: Introduction to Web Development course in our first term of the Computer System Technology at BCIT. We wanted to create a webpage that would help alumni, current and future students of the CST program easily buy, sell and trade used textbooks for their program. We also wanted to create a condensed resource page where students will easily find what the required textbooks for their courses are, and the new and used prices at the bookstore as it is quite convoluted to find this information on the BCIT web page. We chose to make the webpage as responsive as possible to accommodate browsing on any device. We wanted this to be easily accessible from students on the go.</p>
				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li><a href="resources.php">Resources</a></li>
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
