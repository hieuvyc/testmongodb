<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'quanlykhachhang';
	
	$link=mysql_connect($dbHost,$dbUsername,$dbPassword) or die("khong the ket noi");
	mysql_select_db($dbName,$link);
	mysql_query("SET NAMES 'utf8'");
	
	
	$limit = 10;
	$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName) or die("Connection failed: " . mysqli_connect_error());
	mysqli_set_charset($conn, 'utf8');
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	} 
?>