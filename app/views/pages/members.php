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
<? if (isLoggedIn()){ 
echo ''; } else { header ("Location: index.blade.php");
exit; } ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bookie Wookie - Members Area</title>
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/base-responsive.css">
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="color:#696969">
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
								<? if (isLoggedIn()){ echo '<li class="active"><a href="members.php">Members</a></li>'; } else { echo ''; } ?>
								<li><a href="about.blade.php">About Us</a></li></ul>
								
								
							
						</div>
					</div>	
			</div>
		</div>

		<div class="hero-unit">
			
			<h2> Members Section </h2>
			<p>The one stop shop for all the books you need.  </p>
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span8">
					<div class="span12 well">
						<div>
								<p class=>Welcome back! If you have a book you would like to list in the bookexchange, please click on the post ad button to access a form. </p>
								<a class="btn btn-info" href="#postAd" role="button" data-toggle="modal">post ad</a><br><br>
								<div class="modal-footer">
								<a class="btn btn-danger" href="#delete" role="button" data-toggle="modal">Deregister your account</a>
				
								</div>
								
								
						</div> 
					</div>
					
					
					
				
					<div class="row-fluid">
					<span id="regulartable">
						<div class="span12 ">
							<table class="table table-hover" class="span12">
   							<thead>
								
   								<tr ><th colspan="5" align="center">Posts made by you<th></tr>
    							<tr>
    								<th>Name</th>
    								<th>Book</th>
    								<th>Condition</th>
    								<th>Price</th>
    								<th>Contact Info</th>
									<th>Posted on</th>
    							</tr>
    						</thead>
    						<tbody>
							<?php
							
							$sess=$_SESSION['SESS_MEMBER_ID'];
							$data=mysql_query("SELECT * FROM booklist WHERE members_id='$sess'") or die(mysql_error());
							$info=mysql_fetch_array($data);
							while ($info = mysql_fetch_array($data)){
							$mem=$info['members_id'];
							$iddata=mysql_query("SELECT * FROM members WHERE member_id='$mem'") or die(mysql_error());
							$idinfo=mysql_fetch_array($iddata);
							echo '<tr><td>'.$idinfo['firstname'].' '.$idinfo['lastname'].'</td><td>'.$info['book'].'</td><td>'.$info['con'].'</td><td>'.$info['price'].'</td><td>'.$idinfo['email'].' </td><td>'.$info['datetime'].'</tr>';
							}
							?>
    							
    						</tbody>
   						 </table>
						</div>	
						</span>
						
						<span id="smarttable">
						<div class="span8"> <h2 style="text-align:center">My Books for Sale</h2></div>
						
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
							
					
				 </span> 

						
					</div>

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

		</div>
		
		<!--delete-->
		<div id="delete" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="buton" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
					<h3 id="modalLabel">Deregister Your Account</h3>
			</div>

			<div class="modal-body">
				<p>If you press Deregister button all your account info and posts will be deleted from our website</p>
				<h4> Are you sure you want to proceed with this action? </h4>							
			</div>

			<div class="modal-footer">
				<form action="delete.php" method="post">
				<button type="submit" class="btn btn-danger" >Deregister me</button>
				<button class="btn btn-succes" data-dismiss="modal" aria-hidden="true">cancel</button>
				</form>
			</div>
		</div>
		<!-- post ad-->
		

		<div id="postAd" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="buton" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
					<h3 id="modalLabel">Post an ad</h3>
			</div>

			<div class="modal-body">
					<div class="controls controls-row">
						<form method="post" action="post.php" class="form-horizontal">
							<label id="bookLabel"></label>
							<input type="text" placeholder="Name of book" id="txtBook" name="book" onblur="testName('txtBook','bookLabel')" class="span5">
							<br><br>
							<label id="conditionLabel"></label>
							<!--<input type="text" placeholder="Please enter the condition of the book" id="txtBook" name="condition" onblur="testName('txtBook','bookLabel')" class="span5">
							<br><br>-->
							
							 
							<select name="con" class="span5" id="selCondition" onblur="checkPosition('selCondition','conditionLabel')">
							<option value="NA">Please choose the books condition</option>
								<option value="Fair">Fair</option>
								<option value="Good">Good</option>
								<option value="Like New">Like new</option>
								<option value="Mint">Mint</option>
							</select>
							<br><br>
							
							
    						<label id="priceLabel"></label>
							<!--<input type="text" placeholder="Please enter the price of the book" id="txtBook" name="price" onblur="testName('txtBook','bookLabel')" class="span5">-->
							
    						<select id="selPrice" name="price" onblur="checkPosition('selPrice','priceLabel')">
    							<option value="Not Declared">Asking Price (CAD)</option>
    							<option value="Free">Free</option>
    							<option value="$10">$10</option>
    							<option value="$20">$20</option>
    							<option value="$30">$30</option>
    							<option value="$40">$40</option>
    							<option value="$50">$50</option>
    							<option value="$60">$60</option>
    							<option value="$70">$70</option>
    							<option value="$80">$80</option>
    							<option value="$90">$90</option>
    							<option value="$100">$100 +</option>
    						</select>
    						<br><br>	
						
					</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">cancel</button>
				<input type="submit" value="post" class="btn btn-success" >
			</div>
			</form>

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
			var bookname = $(name).value;
			var label = $(element);

  			if ( bookname.length <= 0 ) {
				label.innerHTML="Please enter the book name";
				label.style.color="red";
 			 }
			else {
				label.innerHTML="";
				
			
			}
		}

		function testPositionValid(id){
				return ($(id).selectedIndex != 0);
			} 

		function checkPosition(id, element){
			var label = $(element);
			if(!testPositionValid(id)){
				label.innerHTML="Please make a selection";
				label.style.color="red";
			}else {
				label.innerHTML="Valid selection";
				label.style.color="green";
			}
		} 

		</script>

	</body>
</html>
