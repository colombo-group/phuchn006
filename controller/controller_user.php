<?php
	$arr_id = array();
	foreach ($_SESSION["edit_arr"] as $value) {
		# code...
		$arr_id[] = $value["pk_user_id"];
	}
	$id = isset($_GET["id"]) ? $_GET["id"]:'';
	if (in_array($id, $arr_id)){
		$arr = fetch_one("select * from user where pk_user_id='$id'");
		$name = $arr["name"];
		$email = $arr["email"];
		$arr_gioi_thieu = fetch("select name from user where nguoi_gioi_thieu='$name' OR nguoi_gioi_thieu='$email' ");
	if (!isset($_SESSION["username"])){
		$arr = fetch_one("select img,fullname from user where pk_user_id='$id'");
	}
		include "view/view_user.php";
	}
?>