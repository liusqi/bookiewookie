
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bookie Wookie - Contact Us</title>
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
			<h2>Contact Us</h2>
			<p>The one stop shop for all your book needs </p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8 well">
					<p>We would love to hear from you! Please fill out the following form or email your questions or comments to admin@bookiewookie.com, or view our <a href="faq.blade.php">FAQ</a> page to see if your question has already been answered</p>
					<div>
						<form>
    						<fieldset>
    							<legend>Please complete the form below</legend>
    							<label id="name"></label>
    							<input type="text" placeholder="Name" id="txtName" onblur="testName('txtName', 'name')">
    							<label id="email"></label>
    							<input type="email" placeholder="e-mail" id="txtEmail" onblur="testEmail('txtEmail','email')">
    							<label></label>
    							<textarea rows="3" placeholder="Request/Inquiry"></textarea>
    							<span class="help-block">Thank you, we will get back to you as soon as possible.</span>
    							<button type="submit" class="btn btn-primary">Submit</button>
    						</fieldset>
    					</form>
					</div>
				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li><a href="resources.php">Resources</a></li>
						<li><a href="faq.blade.php">FAQ</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li class="active"><a href="contactus.php">Contact Us</a></li>
						<li class="divider"></li>
						<li><a href="termbook.php">Books by term</a></li>
					</ul>
				</div>
			</div>
			<hr>
			<footer style="text-align:center">
			<p>&copy; <a href="index.blade.php">BookieWookie.com</a> 2013 || Website Designed by CST Students : <a href="about.blade.php">Jas, Shah, Daniel and Randeep</a> 	</p>
			</footer>
		</div>

		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript">
		function $(id){
				var element = document.getElementById(id);
				if( element == null )
					alert( 'Programmer error: ' + id + ' does not exist.' );
				return element;
			}

		function testName(name, element) {
			var label = $(element);

  			if ($(name).value == '' ) {
   			 label.innerHTML="Please enter your name";
   			 label.style.color="red";
 			 }else{
 			 	label.innerHTML="Valid";
   			 	label.style.color="green";
 			 }
		}

		function checkEmail(email) {
				var pattern = /[a-z | A-Z | 0-9]+@{1}[a-z | A-Z | 0-9]+\.{1}(com|ca|org)$/i;
				return pattern.test($(email).value);
			}
			
			function testEmail(email, element) {
				var label = $(element);
				if ( !checkEmail(email) ) {
					label.innerHTML="Please enter a valid e-mail";
					label.style.color="red";
				} else {
					label.innerHTML="Valid e-mail";
					label.style.color="green";
					return ('true');
				}
			}
		

		</script>

	</body>
</html>
