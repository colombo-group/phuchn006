<?php
	
	$n = $_SESSION["username"];
	$n = fetch_one("select pk_user_id from user where name='$n'");
	$id = isset($_GET["id"]) ? $_GET["id"]:'';
	$arr_id = array();
	$act = isset($_GET["act"]) ? $_GET["act"] : "";
	foreach ($_SESSION["edit_arr"] as $value) {
		# code...
		$arr_id[] = $value["pk_user_id"];
	}
	if ( $_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["edit"])){
				$i = $id;
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
						query("update user set fullname='$fullname', name='$username', email='$email', phone='$phone', img='$name_img', password='$password', description='$des', ngaysinh='$ngaysinh', gioitinh='$gioitinh' where pk_user_id='$id' ");
						if ($i==$n["pk_user_id"])
							$_SESSION["username"] = $username;
						header("location:index.php");
					}
					else{
						$password = md5($password);
						query("update user set fullname='$fullname', name='$username', email='$email', phone='$phone', password='$password', description='$des', ngaysinh='$ngaysinh', gioitinh='$gioitinh' where pk_user_id='$id'");
						if ($i==$n["pk_user_id"])
							$_SESSION["username"] = $username;
						header("location:index.php");
					}
				}
	}
	if (in_array($id, $arr_id)){
		switch ($act) {
			case 'edit':
				# code...
				$infor_user = fetch_one("select * from user where pk_user_id=$id");
				include "view/view_delete_edit_user.php";
				break;
			case 'delete':
				# code...
				if (in_array($id,$arr_id)){
					if ($id==$n["pk_user_id"]){
						query("delete from user where pk_user_id='$id'");
						session_destroy();
						header("location: index.php");
					}
					else{
						query("delete from user where pk_user_id='$id'");
						header("location: index.php");
					}
				}
				break;
			default:
				# code...
				break;
		}
	}
?>