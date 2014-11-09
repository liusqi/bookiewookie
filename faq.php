
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bookie Wookie - FAQs</title>
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
						<a href="index.php" class="brand">Bookie Wookie</a>
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
								<li><a href="index.php">Home</a></li>
								<li><a href="bookexchange.php">Book Exchange</a></li>
								<? if (isLoggedIn()){ echo '<li><a href="members.php">Members</a></li>'; } else { echo ''; } ?>
								<li><a href="about.php">About Us</a></li>
							</ul>
						</div>
					</div>	
			</div>
		</div>

		<div class="hero-unit">
			<h2> Frequently Asked Questions</h2>
			<p>You asked, we answered</p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8 well">
					<h4>Why did you make this site?</h4> 
					<br>
					We created this site as a resource for students to easily find out what textbooks they need for each term, and to be able to buy and sell these textbooks to future and current students. We made it as our term project for COMP1536 in first term CST.
					<br><br>
					<h4>I cannot find what I’m looking for on your website, where can I find this information?</h4>
					<br>	Please check our resources page <a href="resources.php">[here]</a>.
					<br><br>
					<h4>Are the contents of your webpage up to date?</h4>
					<br>	We try to keep the website as up to date as possible, but if you notice some information on our site is out of date  or incorrect please contact us <a href="contactus.php">[here]</a> or at admin@bookiewookie.com
					<br><br>
					<h4>If I sign up am I going to get a lot of emails?</h4>
					<br>	We personally do not send out many emails. You may get emails from people who wish to purchase your books, or responses from us to your questions and comments however.
				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li><a href="resources.php">Resources</a></li>
						<li class="active"><a href="faq.php">FAQ</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
						<li class="divider"></li>
						<li><a href="termbook.php">Books by term</a></li>
					</ul>
				</div>
			</div>
			<hr>
			<footer style="text-align:center">
			<p>&copy; <a href="index.php">BookieWookie.com</a> 2013 || Website Designed by CST Students : <a href="about.php">Jas, Shah, Daniel and Randeep</a> </p> 
			</footer>

		</div>

		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>
</html>
