<?php
	if (isset($_SESSION["username"])){
?>
<fieldset style="width:400px; margin:0 auto; padding:25px; position:absolute; top:80px; left:35%">
	<legend>Thông tin cá nhân</legend>
	<form method="post" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label>Tên đầy đủ</label></td>
			<td><input type="text" name="fullname" disabled style="width:250px"
					   value="<?php echo  $arr['fullname']; ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Tên đăng nhập</label></td>
			<td><input type="text" name="username" disabled style="width:250px"
					    value="<?php echo  $arr['name']; ?>" 
				>
			</td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email" disabled style="width:250px"
					    value="<?php echo  $arr['email']; ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Số điện thoại</label></td>
			<td><input type="text" name="phone" disabled style="width:250px"
					    value="<?php echo  $arr['phone']; ?>" 
				?
			>
			</td>
		</tr>
		<tr>
			<td><label>Ảnh đại diện</label></td>
			<td><img style="width:100px; height:100px" src="<?php echo $arr['img']; ?>"></td>
		</tr>
		<tr>
			<td><label>Mô tả</label></td>
			<td> 
				<input type="text"  disabled name=""  value="<?php echo  $arr['description']; ?>" >
			</td>
		</tr>
		<tr>
			<td><label>Ngày sinh</label></td>
			<td><input type="date" name="date" disabled style="width:125px"
					    value="<?php echo  $arr['ngaysinh']; ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Giới tính</label></td>
			<td>
				<input type="text" disabled name=""
					value="<?php echo ($arr['gioitinh']==1) ? "Nam" : "Nữ"; ?>" 
				>
			</td>
		</tr>
		<tr>
			<td><label>Đã giới thiệu cho</label></td>
			<td><input type="text" name="fullname" disabled style="width:250px"
					   value="<?php 
					   		foreach ($arr_gioi_thieu as $key => $value) {
					   			# code...
					   			echo $value["name"] . ", ";
					   		}
					   ?>" 
			>
			</td>
		</tr>
	</table>
	</form>
</fieldset>
<?php } ?>
<?php 
	if (!isset($_SESSION["username"])){
?>
<fieldset style="width:400px; margin:0 auto; padding:25px; position:absolute; top:80px; left:35%">
	<legend>Thông tin cá nhân</legend>
	<form method="post" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label>Tên đầy đủ</label></td>
			<td><input type="text" name="fullname" disabled style="width:250px"
					   value="<?php echo  $arr['fullname']; ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Ảnh đại diện</label></td>
			<td><img style="width:100px; height:100px" src="<?php echo $arr['img']; ?>"></td>
		</tr>
	</table>
	</form>
</fieldset>
<script>
	var r = confirm("Đăng nhập để xem đầy đủ!");
	if (r==true){
		location.href = "index.php?controller=login";
	}
</script>
<?php } ?>