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
		<title>Bookie Wookie - Termbooks</title>
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
			<h2>Books by term</h2>
			<p>January Intake</p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8">
					<table class="table table-hover">
   						<thead>
    						<tr>
    							<th>Course #</th>
    							<th>Course Name</th>
    							<th>Required Textbook</th>
    							<th>Price @ bookstore</th>
    						</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td>BUSA 2720</td>
    							<td>Business </td>
    							<td>Understanding Canadian Business</td>
    							<td>$147.50</td>
   							</tr>
   							<tr>
   								<td>COMM 1116</td>
   								<td>Business Communications 1</td>
   								<td>Essentials of Technical Communications</td>
   								<td>$62.50</td>
   							</tr>
   							<tr>
   								<td>COMP 1100</td>
   								<td>Enhanched Learning Skills</td>
   								<td>Becoming a Master Student</td>
   								<td>$88.50</td>
   							</tr>
   							<tr>
   								<td>COMP 1111</td>
   								<td>Essential Computing Skills</td>
   								<td>N/A</td>
   								<td>N/A</td>
   							</tr>
   							<tr>
   								<td>COMP 1113</td>
   								<td>Applied Mathematics</td>
   								<td>Introductory Mathematics for CS</td>
   								<td>$15.95</td>
   							</tr>
   							<tr>
   								<td>COMP 1510</td>
   								<td>Programming Methods</td>
   								<td>Java Software Solutions: Sevent Edition</td>
   								<td>$140.50</td>
   							</tr>
   							<tr>
   								<td>COMP 1536</td>
   								<td>Intro to Web Development</td>
   								<td>Web Development and Design Foundations</td>
   								<td>$117.50</td>
   							</tr>
    					</tbody>
    				</table>
				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li><a href="resources.php">Resources</a></li>
						<li><a href="faq.blade.php">FAQ</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
						<li class="divider"></li>
						<li class="active"><a href="termbook.php">Books by term</a></li>
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
