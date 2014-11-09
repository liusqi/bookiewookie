<?php
	require_once('config.php');
	//Start session
	session_start();
	
	//Unset the variables stored in session
	
	header("location: ".HOMEURL);
	exit();
?>
