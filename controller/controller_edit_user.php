<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$name = $_SESSION["username"];
		$infor_user = fetch_one("select pk_user_id from user where name='$name'");
		$i = $infor_user["pk_user_id"];
		$fullname = $_POST["fullname"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$des = $_POST["des"];
		$ngaysinh =  $_POST["date"];
		$gioitinh = $_POST["gioitinh"];
		$number_username = num_rows("select name from user where name='$username' AND pk_user_id != $i ");
		$number_email = num_rows("select email from user where email='$email' AND pk_user_id != $i");
		$number_phone = num_rows("select phone from user where phone='$phone' AND pk_user_id != $i");
		if ($number_username==0 && $number_email==0 && $number_phone==0 && $password==$repassword){
			if (isset($_FILES['image']) && ($_FILES['image']["name"]!="")){
				$file_name = $_FILES['image']["name"];
				$file_tmp = $_FILES['image']['tmp_name'];
				$name_img = "public/images/".time().$file_name;
				move_uploaded_file($file_tmp,$name_img);
				$password = md5($password);
				query("update user set fullname='$fullname', name='$username', email='$email', phone='$phone', img='$name_img', password='$password', description='$des', ngaysinh='$ngaysinh', gioitinh='$gioitinh' where name='$name' ");
				$_SESSION["username"] = $username;
				header("location:index.php");
			}
			else{
				$password = md5($password);
				query("update user set fullname='$fullname', name='$username', email='$email', phone='$phone', password='$password', description='$des', ngaysinh='$ngaysinh', gioitinh='$gioitinh' where name='$name'");
				$_SESSION["username"] = $username;
				header("location:index.php");
			}
		}
	}
	$id = $_GET["id"];
	$name = $_SESSION["username"];
	$infor_user = fetch_one("select * from user where name='$name' ");
	if ($id==$infor_user["pk_user_id"] || ( isset($arr_id_session) && in_array($id,$arr_id_session) ) ){
		include "view/view_edit_user.php";
	}
	else {
		echo "<div style='color:red; text-align:center'>Đường dẫn bị sai</div>";
	}
?>