<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "intern";
	//connect database
	$con = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($con,"UTF-8");
?>