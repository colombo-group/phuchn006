<!DOCTYPE html>
<html onclick="bodyClick(event)">
<head>
	<?php
		$title = isset($_GET["controller"]) ? $_GET["controller"]:"";
		switch ($title) {
			case 'sign_up':
				# code...
				$title = "Đăng ký";
				break;
			case 'login':
				# code...
				$title = "Đăng nhập";
				break;
			default:
				# code...
				$title = "Trang chủ";
				break;
		}
	?>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/layout.css">
	<script type="text/javascript" src="public/layout.js"></script>
</head>
<body style="padding:0; margin:0; position:relative">
	<!-- header -->
	<div class="header">
		<a href="index.php" style="color:white; text-decoration:none; font-family:Arial; float:left; margin-left:200px">Trang chủ</a>
			<?php
				if (isset($_SESSION["username"])){
					include("controller/head.php");
				}
			?>
			<?php 
				if (!isset($_SESSION["username"])){
			?>
			<div class="content">
				<a href="index.php?controller=login" title="Đăng nhập"
				<?php
					if (isset($_COOKIE["pause"])){
				?>
					onclick="alert('20 giây sau bạn mới được đăng nhập trở lại')";
				<?php } ?>
				>Đăng nhập</a> / 
				<a href="index.php?controller=sign_up" title="Đăng ký">Đăng ký</a>
			</div>
			<?php } ?>
		
	</div>
	<div id="menu">
			<br>
			<?php
				$name = $_SESSION['username'];
				$id = fetch_one("select pk_user_id from user where name='$name'");
			?>
			<a href="index.php?controller=edit_user&id=<?php echo $id['pk_user_id']; ?>">&nbsp Chỉnh sửa thông tin</a> <br>
			<hr>
			<a href="index.php?controller=logout">&nbsp Đăng xuất</a><br><br>
	</div>
	<!-- end header -->

	<!-- content -->
	<?php
		if (isset($controller))
			include $controller;
	?>
	<!-- end content -->

</body>
</html>