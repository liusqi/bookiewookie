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
echo ''; } else { header ("Location: index.php");
exit; } ?>

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
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="color:#696969">
							Menu<!-- <span class="icon-th-list"> -->
						</a>
						<a href="index.html" class="brand">Bookie Wookie</a>
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
								<? if (isLoggedIn()){ echo '<li class="active"><a href="members.php">Members</a></li>'; } else { echo ''; } ?>
								<li><a href="about.php">About Us</a></li></ul>
								
								
							
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
					<div class="row-fluid">
					<span id="regulartable">
						<div class="span8 ">
							<table class="table table-hover" class="span12">
   							<thead>
   								<tr ><th colspan="5" align="center">Recent Posts/Replies<th></tr>
    							<tr>
    								<th>Name</th>
    								<th>Book</th>
    								<th>Condition</th>
    								<th>Price</th>
    								<th>Contact Info</th>
    							</tr>
    						</thead>
    						<tbody>
							<?php
							$iddata=mysql_query("SELECT * FROM members WHERE member_id=($mem)") or die(mysql_error());
							$idinfo=mysql_fetch_array($iddata);
							
			$data=mysql_query("SELECT * FROM booklist") or die(mysql_error());
			$info=mysql_fetch_array($data);
			while ($info = mysql_fetch_array($data)){
					$mem=$info['members_id'];
					echo '<tr><td>'.$idinfo['firstname'].$idinfo['lastname'].'</td><td>'.$info['book'].'</td><td>'.$info['con'].'</td><td>'.$info['members_id'].'</td>
    								<td>john@smith.ca</td>
    							</tr>';
				}
		?>
    							
    						</tbody>
   						 </table>
						</div>	
						</span>
						
						<span id="smarttable">
						<div class="span8"> <h2 style="text-align:center">Books for Sale</h2></div>
					
				 <div  class="clickable span8 well" > Java for begniners</div>
				 <table class="table table-hover" >
				 <tr>  <td>Posted By:</td>  <td> John Smith</td> </tr>
				 <tr>  <td>Condition:</td>  <td> OK </td> </tr>
				 <tr>  <td>Price:</td>  <td> $40.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> john@smith.ca</td> </tr>
				 </table>
				 
				 
				 
				 <div class="clickable span8 well"> Econ 101</div>
				 <table class="table table-hover" class="span12">
				 <tr>  <td>Posted By:</td>  <td> Mary Karl</td> </tr>
				 <tr>  <td>Condition:</td>  <td> Good</td> </tr>
				 <tr>  <td>Price:</td>  <td> $34.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> mary@karl.com</td></tr>
				 </table> 
				 
				 <div class="clickable span8 well"> Communications 2211</div>
				 <table class="table table-hover" class="span12">
				 <tr>  <td>Posted By:</td>  <td> Ashley Wier</td> </tr>
				 <tr>  <td>Condition:</td>  <td> Fair</td> </tr>
				 <tr>  <td>Price:</td>  <td> $28.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> ashley@wier.com</td> </tr>
				 </table> 
				 
				 <div class="clickable span8 well"> Web Dev 2011</div>
				 <table class="table table-hover" class="span12">
				 <tr>  <td>Posted By:</td>  <td> Mary Karl</td> </tr>
				 <tr>  <td>Condition:</td>  <td> Good</td> </tr>
				 <tr>  <td>Price:</td>  <td> $34.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> mary@karl.com</td> </tr>
				 </table>
				 
				 <div class="clickable span8 well"> Java for begniners</div>
				 <table class="table table-hover" class="span12">
				 <tr>  <td>Posted By:</td>  <td> Mary Karl</td> </tr>
				 <tr>  <td>Condition:</td>  <td> Good</td> </tr>
				 <tr>  <td>Price:</td>  <td> $34.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> mary@karl.com</td> </tr>
				 </table> 
				 
				  <div class="clickable span8 well"> Econ 101</div>
				 <table class="table table-hover" class="span12">
				 <tr>  <td>Posted By:</td>  <td> Mary Karl</td> </tr>
				 <tr>  <td>Condition:</td>  <td> Good</td> </tr>
				 <tr>  <td>Price:</td>  <td> $34.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> mary@karl.com</td> </tr>
				 </table>
				 
				  <div class="clickable span8 well">Communications 2211</div>
				 <table class="table table-hover" class="span12">
				 <tr>  <td>Posted By:</td>  <td> Mary Karl</td> </tr>
				 <tr>  <td>Condition:</td>  <td> Good</td> </tr>
				 <tr>  <td>Price:</td>  <td> $34.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> mary@karl.com</td> </tr>
				 </table> 
				 
				 <div class="clickable span8 well"> Web Dev 2011</div>
				 <table class="table table-hover" class="span12">
				 <tr>  <td>Posted By:</td>  <td> Mary Karl</td> </tr>
				 <tr>  <td>Condition:</td>  <td> Good</td> </tr>
				 <tr>  <td>Price:</td>  <td> $34.00 </td> </tr>
				 <tr>  <td>Contact Info:</td>  <td> mary@karl.com</td> </tr>
				 </table> </span> 

						<div class="span4 well">
							<div>
								<p class=>Welcome back! If you have a book you would like to list in the bookexchange, please click on the post ad button to access a form. </p>
								<a class="btn btn-info" href="#postAd" role="button" data-toggle="modal">post ad</a>
							</div> 
						</div>
					</div>

				</div>
				<div class="span4">
					<ul class="nav nav-list well">
						<li class="nav-header">More Info</li>
						<li><a href="resources.html">Resources</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="privacy.html">Privacy Policy</a></li>
						<li><a href="contactus.html">Contact Us</a></li>
						<li class="divider"></li>
						<li><a href="termbook.html">Books by term</a></li>
					</ul>
				</div>
			</div> 
			<hr>
			<footer style="text-align:center">
			<p>&copy; <a href="index.html">BookieWookie.com</a> 2013 || Website Designed by CST Students : <a href="about.html">Jas, Shah, Daniel and Randeep</a> </p> 
      </footer>
		</div>

		</div>

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
							
							<select class="span5" name="cond" id="selCondition" onblur="checkPosition('selCondition','conditionLabel')">
								<option value="Not declared">Please choose the books condition</option>
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
