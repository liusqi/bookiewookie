<?php
	require_once('auth.php');
	require_once('config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="booklist"; // Table name

	// get data that sent from form
	$book=$_POST['book'];
	$condition=$_POST['con'];
	$price=$_POST['price'];
	
	$datetime=date("d/m/y h:i:s"); //create date time

	$sql="INSERT INTO $tbl_name(book, members_id, datetime, price, con) VALUES ('$book','$member_id','$datetime','$price','$condition')";
	$result=mysql_query($sql);
	
	if($result)
		
		header("location: members.php");
	else {
		echo "ERROR";
		
		
	}
	mysql_close();
?>