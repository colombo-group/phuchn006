<?php 
	$username = $_SESSION['username'];
	$user = fetch_one("select * from user where name='$username'");
	$arr = explode(" ", $user["name"]);
	include "view/head.php";
?>