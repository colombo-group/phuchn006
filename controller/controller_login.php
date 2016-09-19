<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$password = md5($password);
		$arr = num_rows("select * from user where email='$email' AND password='$password'");
		if ($arr == 1){
			$arr = fetch_one("select name from user where email='$email'");
			$_SESSION["username"] = $arr["name"];
			unset($_SESSION["erorr1"]);
			unset($_SESSION["erorr2"]);
		    header("location:index.php");
		}

		$arr = num_rows("select * from user where name='$email' AND password='$password'");
		if ($arr == 1){
			$arr = fetch_one("select name from user where name='$email'");
			$_SESSION["username"] = $arr["name"];
			unset($_SESSION["erorr1"]);
			unset($_SESSION["erorr2"]);
			unset($_SESSION["erorr3"]);
		    header("location:index.php");
		}
		if ($arr==0){
			if (!isset($_SESSION["erorr1"])){
				$_SESSION["erorr1"] = 1;
			}
			else
				if (!isset($_SESSION["erorr2"])){
					$_SESSION["erorr2"] = 2;
				}
				else
					if (!isset($_COOKIE['pause'])){
						setcookie("pause","2 hours", time() + 20);
						}
		}
	}
	if (isset($_COOKIE["pause"])){
		unset($_SESSION["erorr1"]);
		unset($_SESSION["erorr2"]);
		unset($_SESSION["erorr3"]);
		header("location: index.php");
	}
	include "view/view_login.php";
?>