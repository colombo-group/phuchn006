<?php
	$n = $_SESSION["username"];
	$id = isset($_GET["id"]) ? $_GET["id"]:"";
	$b = fetch_one("select * from user where name='$n'");
	if ($b["quyen"]==2){
		$user_change = fetch_one("select * from user where pk_user_id='$id'");
		if ($user_change["quyen"]==0)
			query("update user set quyen=1 where pk_user_id='$id'");
		else
			if ($user_change["quyen"]==1)
				query("update user set quyen=0 where pk_user_id='$id'");
	header("location:index.php");
	}
	else{
		echo "<div style='color:red; text-align:center'>Đường dẫn sai</div>";
	}
?>