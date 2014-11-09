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
		<title>Bookie Wookie - Home</title>
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="bookexchange.php">Book Exchange</a></li>
								<? if (isLoggedIn()){ echo '<li><a href="members.php">Members</a></li>'; } else { echo ''; } ?>
								<li><a href="about.php">About Us</a></li>
								
							</ul>
						</div>
					</div>	
			</div>
		</div>

		<div class="hero-unit">
			<h2> Welcome to Bookie Wookie </h2>
			<p>The one stop shop for all the books you need. </p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8 well" id="index">
					<p>Bookie Wookie is an online book exchange platform designed to help students enrolled in the CST program @ BCIT save money by allowing them to buy, sell or trade used text books. Anyone can join and members can connect directly with buyers or sellers through online classified ads.Help us spread the word by telling your class mates about our site. To get things started, <? if (isLoggedIn()){ echo ''; } else { echo ' <a href="#register" role="button" data-toggle="modal">join</a> our site, create a profile, '; } ?><a href="#postAd" role="button" data-toggle="modal">post</a> an add and wait to be contacted!</p>

					<div class="row-fluid">
						<? if (isLoggedIn()){ echo ''; } else { echo '<div class="span4 well">
							<h4>Become a member / Login</h4>
							<p>Join us to get started, create a <a href="#register" role="button" data-toggle="modal">profile</a> or <a  href="#login" role="button" data-toggle="modal">login</a> if you are already an existing member.<p>
							<a href="#register" class="btn btn-primary" role="button" data-toggle="modal">Join</a>
							<a href="#login" class="btn btn-primary" role="button" data-toggle="modal">Login</a>
						</div>'; } ?>
						
						<div class="span4 well"><h4>Search Books</h4>
							<p>Check out the ads in our <a href="bookexchange.php">Book Exchange</a> section and search for the book your are looking for!<p>
							<a href="bookexchange.php" class="btn btn-primary">Browse</a>
						</div>
						<div class="span4 well"><h4>FAQ</h4>
							<p>Check out the <a href="about.php">Frequently Asked Questions</a> section to get a better understanding of how to use this site.<p>
							<a href="faq.php" class="btn btn-primary">FAQ</a>
						</div>
					</div>

				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li><a href="resources.php">Resources</a></li>
						<li><a href="faq.php">FAQ</a></li>
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
		
		
		
		<!-- modals -->
		

		<div id="contacUs" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="buton" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
					<h3 id="modalLabel">Contact Us</h3>
			</div>

			<div class="modal-body">
					<div class="controls controls-row">
						<form>
    						<label>Name</label>
    						<input type="text" placeholder="Name">
    						<label>E-mail</label>
    						<input type="email" placeholder="e-mail">
    						<label>Request/Inquiry</label>
    						<textarea rows="3"></textarea>
    						<span class="help-block">Thank you, we will get back to you as soon as possible.</span>
    						<button type="submit" class="btn btn-primary">Submit</button>
    					</form>
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">cancel</button>
				<button class="btn btn-success" >Send</button>
			</div>

		</div>
		<div id="login" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="buton" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
					<h3 id="modalLabel">Login</h3>
			</div>

			<div class="modal-body">
				<form method="post" action="login.php">
							<label id="loginUsername"></label>
							<input type="text" name="login" class="input-block-level" placeholder="username" id="txtUSRName"onblur="testUSRName('txtUSRName' , 'loginUsername')">
							<label id="loginPass"></label>
							<input type="password" name="password" class="input-block-level" placeholder="password" id="txtPSWRD" onblur="testPSWRD('txtPSWRD', 'loginPass')">
							<label class="checkbox">
							<input type="checkbox">Remember Me</label>
				
							
			</div>

			<div class="modal-footer">
				<input type="submit" class="btn btn-success" value="Login" >
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">cancel</button>
				</form>
			</div>

		</div><!-- Modal form end-->
		
		<div id="register" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">

			<form action="register.php" method="post">
			<div class="modal-header">
				<button type="buton" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
					<h3 id="modalLabel">Register</h3>
			</div>

			<div class="modal-body">
				

					
					<div class="controls controls-row">
						<input type="text" class="span2" placeholder="first name" name="fname" id="txtFirstName" onblur="testName('txtFirstName')">
						<input type="text" class="span2" placeholder="last name" name="lname" id="txtLastName" onblur="testName('txtLastName')">

					</div>

					<div class="controls control-group">
						
						<label id="registerUsername"><? echo $loginerror; ?></label>
						<input type="text" class="span5" placeholder="username" name="login" id="txtUsername" onblur="testLoginUserName('txtUsername','registerUsername')">
						<label id="registerPassword"></label>
						<input type="password" class="span5" placeholder="password" name="password" id="txtPassword" onblur="testLoginPassword('txtPassword','registerPassword')">
						<label id="registerConfirmPass"></label>
						<input type="password" class="span5" placeholder="confirm password" name="cpassword" id="txtConfirmPassword" onblur="confirmPass('txtConfirmPassword','txtPassword','registerConfirmPass')">
						<label id="registerEmail"></label>
						<input type="text" class="span5" placeholder="e-mail" id="txtEmail" name="email" onblur="testEmail('txtEmail','registerEmail')">
												
					</div>
					
				
			</div>

			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">cancel</button>
				<input class="btn btn-success" type="submit" value="Register">
				
			</div>
			</form>

		</div><!-- end modal register -->
		
		<div id="postAd" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="buton" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
					<h3 id="modalLabel">Post an ad</h3>
			</div>

			<div class="modal-body">
					<div class="controls controls-row">
						<form method="get" action="http://webdevfoundations.net/scripts/formdemo.asp" class="form-horizontal">
							<label id="bookLabel"></label>
							<input type="text" placeholder="Name of book" id="txtBook" onblur="testName('txtBook','bookLabel')" class="span5">
							<br><br>
							<label id="conditionLabel"></label>
							<select class="span5" id="selCondition" onblur="checkPosition('selCondition','conditionLabel')">
								<option>Please choose the books condition</option>
								<option>Fair</option>
								<option>Good</option>
								<option>Like new</option>
								<option>Mint</option>
							</select>
    						<br><br>
    						<label id="priceLabel"></label>
    						<select id="selPrice" onblur="checkPosition('selPrice','priceLabel')">
    							<option>Asking Price (CAD)</option>
    							<option>Free</option>
    							<option>$10</option>
    							<option>$20</option>
    							<option>$30</option>
    							<option>$40</option>
    							<option>$50</option>
    							<option>$60</option>
    							<option>$70</option>
    							<option>$80</option>
    							<option>$90</option>
    							<option>$100 +</option>
    						</select>
    						<br><br>	
						</form>
					</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">cancel</button>
				<button class="btn btn-success" >post</button>
			</div>

		</div> <!--end modal post ad -->
		
		

		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="js/scripts.js"></script>
		
		<script type="text/javascript">
		
			function $(id){
				var element = document.getElementById(id);
				if( element == null )
					alert( 'Programmer error: ' + id + ' does not exist.' );
				return element;
			}
			
			function testUSRName(name, element) {
				var username = $(name).value;
				var usernamelength = $(name).value.length;
				var label = $(element);
  				if (usernamelength <= 0 ) {
   			 		label.innerHTML = "Please enter your username to login";
   			 		label.style.color = "red";
 			 	}
				else {
					label.innerHTML = "";
   			 		
				}
 			 	
			}
			
			function testPSWRD(pass , element) {
				var password = $(pass).value.length;
				var label = $(element);
  				if ( password <= 0 ) {
   			 		label.innerHTML="Please enter your password to login";
   			 		label.style.color="red";
 			 	}
				else {
					label.innerHTML = "";
   			 		
				}
			}

			function testName(name) {
  				if ($(name).value == '' ) {
   			 		$(name).placeholder="Incomplete";
   			 		$(name).style.color="red";
 			 	}else{
 			 		$(name).style.color="#555555"
 			 	}
			}
			
			function testLoginUserName(name, element) {
				var username = $(name).value;
				var usernamelength = $(name).value.length;
				var label = $(element);
  				if (usernamelength < 5 ) {
   			 		label.innerHTML = "Invalid username, must be 5 characters";
   			 		label.style.color = "red";
 			 	}
 			 	else{
 			 		label.innerHTML = "Valid username";
 			 		label.style.color ="green";
 			 	}
			}

			function testLoginPassword(pass , element) {
				var password = $(pass).value.length;
				var label = $(element);
  				if (password < 8 ) {
   			 		label.innerHTML="Please enter a password of at least 8 characters";
   			 		label.style.color="red";
 			 	}else {
 			 		label.innerHTML="Valid password";
 			 		label.style.color="green";
 			 	}
			}

			function confirmPass(pass_0, pass_1, element){
				 var first = $(pass_0).value;
				 var second = $(pass_1).value;
				 var label = $(element); 
				
				if ( second.length>8 && second == first ){
					label.innerHTML="Passwords matched";
					label.style.color="green";
					}
								
				else if (second.length>8 && second != first) {					
					label.innerHTML="Passwords did not match";
					label.style.color="red";
					}
				else  {
					label.innerHTML="Enter a Password first which is at least 8 characters long";
					label.style.color="red";
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
