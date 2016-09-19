<?php
	session_start();
	include "config.php";
	//load file model.php
	include "model/model.php";
	$controller = isset($_GET["controller"]) ? $_GET["controller"]:"";
	if ($controller != "")
		$controller = "controller/controller_$controller.php";
	else
		$controller = "controller/controller_main.php";
	include "view/view_layout.php";
?>