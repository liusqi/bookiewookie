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
		<title>Bookie Wookie - Book Exchange</title>
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
						<button class="btn">Welcome ' .$_SESSION['FIRST_NAME'] .'</button>
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
								<li class="active"><a href="bookexchange.php">Book Exchange</a></li>
								<? if (isLoggedIn()){ echo '<li><a href="members.php">Members</a></li>'; } else { echo ''; } ?>
								<li><a href="about.php">About Us</a></li>
								
							</ul>
						</div>
					</div>	
			</div>
		</div>

		<div class="hero-unit">
			<h2> Book Exchange</h2>
			<p>Browse the latest ads and search for the book your looking for!</p>
		</div>

		<div class="container">
				
				<div class="row-fluid">
				<span id="regulartable">
				<div class="span8">
					    <table class="table table-hover" class="span12">
   							<thead>
    							<tr>
    								<th>Name</th>
    								<th>Book</th>
    								<th>Condition</th>
    								<th>Price</th>
    								<th>Contact Info</th>
									<th>Posted at</th>
    							</tr>
    						</thead>
    						<tbody>
    						<?php
													
							$data=mysql_query("SELECT * FROM Topic") or die(mysql_error());
							$info=mysql_fetch_array($data);
							while ($info = mysql_fetch_array($data)){
							
							
							echo '<tr><td>'.$idinfo['firstname'].' '.$idinfo['lastname'].'</td><td>'.$info['book'].'</td><td>'.$info['con'].'</td><td>'.$info['price'].'</td><td>'.$idinfo['email'].'</td><td>'.$info['datetime'].'</td></tr>';
							}
							?>
    						</tbody>
   						 </table>
				</div> </span>
				<span id="smarttable">
				<div class="span8"> <h2 style="text-align:center">Books for Sale</h2></div>
					
				 <?php
							
							
							$data=mysql_query("SELECT * FROM booklist") or die(mysql_error());
							$info=mysql_fetch_array($data);
							while ($info = mysql_fetch_array($data)){
							$mem=$info['members_id'];
							$iddata=mysql_query("SELECT * FROM members WHERE member_id='$mem'") or die(mysql_error());
							$idinfo=mysql_fetch_array($iddata);
							
							echo '<div  class="clickable span8 well" > '.$info['book'].'</div>
								<table class="table table-hover" >
								<tr>  <td>Posted By:</td>  <td>'.$idinfo['firstname'].' '.$idinfo['lastname'].'</td> </tr>
								<tr>  <td>Condition:</td>  <td>'.$info['con'].'</td> </tr>
								<tr>  <td>Price:</td>  <td>'.$info['price'].'</td> </tr>
								<tr>  <td>Contact Info:</td>  <td>'.$idinfo['email'].'</td> </tr>
								<tr>  <td>Posted At:</td>  <td>'.$info['datetime'].'</td> </tr>
								</table>';
							}
							?>
				 </table> </span> 
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

		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="js/scripts.js"></script>
		<script>
		$(".clickable").click(function() {

			$(this).next().toggle();
    
			});
</script>

	</body>
</html>
