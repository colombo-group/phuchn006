<?php

	$arr1 = array();
	$quyen = -1;
	if (isset($_SESSION["username"])){
		$a = fetch_one("select * from user where name='$name'");
		$i = $a['pk_user_id'];
		$quyen = $a["quyen"];
		switch ($quyen) {
			case 1:
				# code...
				$arr1 = fetch("select * from user where quyen=0 || quyen=1");
				$_SESSION["edit_arr"] = fetch("select * from user where quyen=0 OR (quyen=1 AND pk_user_id=$i)");
				break;
			case 2:
				# code...
				$arr1 = fetch("select * from user");
				$_SESSION["edit_arr"] = fetch("select * from user");
				break;
			case 0:
				# code...
				$arr1 = fetch("select * from user where quyen=0");
				$_SESSION["edit_arr"] = fetch("select * from user where quyen=0");
				break;
			default:
				# code...
				break;
		}
	}
	else
		$arr1 = fetch("select * from user where quyen=0");
	
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$_SESSION["pagination"] = $_POST["pagination"];
	}
	$pagination = isset($_SESSION["pagination"]) ? $_SESSION["pagination"]:10;
	$all = count($arr1);
	$page = ($all % $pagination==0) ? $all/$pagination:ceil($all/$pagination);
	$p = isset($_GET["p"]) ? $_GET["p"]:1;
	$arr = array();
	for($i=($p-1)*$pagination; $i<$all&&$i<$p*$pagination; $i++){
		$arr[] = $arr1[$i];
	}
	include "view/view_main.php";
?>