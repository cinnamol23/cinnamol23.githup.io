<?php
	$dbHost='localhost';
	$dbUser='root';
	$dbPass='';
	$dbName='db_home';
	$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
	mysqli_set_charset($con, "utf8");
	


	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}

?>