<?php
	function fetch($sql){
		global $con;
		$array = mysqli_query($con,$sql);
		$arr = array();
		while ( $row = mysqli_fetch_array($array)) {
			# code...
			$arr[] = $row;
		}
		return $arr;
	}

	function fetch_one($sql){
		global $con;
		$array = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($array);
		return $row;
	}

	function query($sql){
		global $con;
		mysqli_query($con,$sql);
	}

	function num_rows($sql){
		global $con;
		$arr = mysqli_query($con,$sql);
		$num = mysqli_num_rows($arr);
		return $num;
	}
?>