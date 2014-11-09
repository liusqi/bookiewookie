<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	
	
	//Sanitize the REQUEST values - parameters may come from GET or POST
	$login = $_REQUEST['login'];
	$password = $_REQUEST['password'];
	
	//Input Validations
	if($login == '' AND $login.value.length<5) {
		$loginerror = 'Invalid username, must be 5 characters';
		$errflag = true;
	}
	else {
		$loginerror ='';
		$errflag = false;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	//if($errflag) {
		//$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		//session_write_close();
		//header("location: index.php");
		//exit();
	//}
	
	//Create query
	if (errflag ==false){
	$qry="SELECT * FROM members WHERE login='$login' AND passwd='".md5($_REQUEST['password'])."'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			
		}else {
			//Login failed
			$errmsg_arr[] = 'Login failed';
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
	}
?>
