<?php
	if (isset($_POST["sign_up"])){
		//kiem tra username, email, phone, repassword
		$nguoi_gioi_thieu = isset($_POST["gioithieu"]) ? $_POST["gioithieu"]:"";
		$fullname = $_POST['fullname'];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$pass = md5($password);
		$name_img="public/images/1.jpg";
		if(isset($_FILES['image']) && ($_FILES['image']["name"]!="")){
			$file_name = $_FILES['image']["name"];
			$file_tmp = $_FILES['image']['tmp_name'];
			$name_img = "public/images/".time().$file_name;
			move_uploaded_file($file_tmp,$name_img);
		}
		$number_username = num_rows("select * from user where name='$username'");
		$number_email = num_rows("select * from user where email='$email'");
		$number_phone = num_rows("select * from user where phone='$phone'");
		if ($number_username==0 && $number_email==0 && $number_phone==0 && $password==$repassword){
			$d = date("Y-m-d");
			query("insert into user(fullname,name,email,phone,img,password,ngay_tham_gia,nguoi_gioi_thieu) values('$fullname','$username','$email','$phone','$name_img','$pass','$d','$nguoi_gioi_thieu')");
			$_SESSION["username"] = $username;
			header("Location:index.php");
		}
	}
	//include view/view_sign_up.php
	include "view/view_sign_up.php";
?>