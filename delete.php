<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());

	$sess=$_SESSION['MEMBER_ID'];
	$data=mysql_query("DELETE FROM members WHERE member_id='$sess'") or die(mysql_error());

	exit();
?>