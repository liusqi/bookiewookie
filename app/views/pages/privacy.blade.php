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
		<title>Bookie Wookie - Privacy Policy</title>
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
			<h2> Privacy Policy</h2>
			<p>Please read!</p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8 well">
					This Privacy Policy governs the manner in which Bookie Wookie collects, uses, maintains and discloses information collected from users (each, a "User") of the www.BookieWookie.com website ("Site"). This privacy policy applies to the Site and all products and services offered by BookieWookie.
					<br><br>
					<h4>Personal identification information</h4><br>
					We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, fill out a form, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address. Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.
					<br><br>
					<h4>Non-personal identification information</h4><br>
					We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.
					<br><br>
					<h4>Web browser cookies</h4><br>
					Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.
					<br><br>
					<h4>How we use collected information</h4><br>
					BookieWookie may collect and use Users personal information for the following purposes:
						•	- To improve customer service
					Information you provide helps us respond to your customer service requests and support needs more efficiently.
						•	- To personalize user experience
					We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.
					<h4>How we protect your information</h4><br>
					We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.
					<br><br>
					<h4>Sharing your personal information</h4><br>
					We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.
					<br><br>
					<h4>Third party websites</h4><br>
					Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.
					<br><br>
					<h4>Changes to this privacy policy</h4><br>
					BookieWookie has the discretion to update this privacy policy at any time. When we do, we will post a notification on the main page of our Site, revise the updated date at the bottom of this page and send you an email. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.
					<br><br>
					<h4>Your acceptance of these terms</h4><br>
					By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.
					<br><br>
					Contacting us
					If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:
					BookieWookie
					www.BookieWookie.com
					9999 fakestreets
					999 999 99999
					admin@bookiewookie.com
					This document was last updated on February 16, 2013
				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li><a href="resources.php">Resources</a></li>
						<li><a href="faq.blade.php">FAQ</a></li>
						<li class="active"><a href="privacy.html">Privacy Policy</a></li>
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
