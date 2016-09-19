<fieldset style="width:400px; margin:50px auto; padding:25px">
	<legend>Đăng ký</legend>
	<form method="post" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label>Tên đầy đủ</label></td>
			<td><input type="text" name="fullname" required style="width:250px"
					   value="<?php echo isset($_POST['fullname']) ? $_POST['fullname']:''; ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Tên đăng nhập</label></td>
			<td><input type="text" name="username" required style="width:250px"
					   value="<?php echo isset($_POST['username']) ? $_POST['username']:''; ?>" 
			>
			<?php 
				if (isset($number_username) && $number_username>0)
					echo "<div style='color:red'>Đã tồn tại tên người dùng này</div>";
			?>
			</td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="email" name="email" required style="width:250px"
					   value="<?php echo isset($_POST['email']) ? $_POST['email']:''; ?>" 
			>
			<?php 
				if (isset($number_email) && $number_email>0)
					echo "<div style='color:red'>Đã tồn tại email này</div>";
			?>
			</td>
		</tr>
		<tr>
			<td><label>Số điện thoại</label></td>
			<td><input type="text" name="phone" pattern="[0-9]+" minlength="10" maxlength="11" required style="width:250px"
					   value="<?php echo isset($_POST['phone']) ? $_POST['phone']:''; ?>" 
			>
			<?php 
				if (isset($number_phone) && $number_phone>0)
					echo "<div style='color:red'>Đã tồn tại số điện thoại này</div>";
			?>
			</td>
		</tr>
		<tr>
			<td><label>Ảnh đại diện</label></td>
			<td><input type="File" name="image"></td>
		</tr>
		<tr>
			<td><label>Mật khẩu</label></td>
			<td><input type="password" name="password" required style="width:250px"
					   value="<?php echo isset($_POST['password']) ? $_POST['password']:''; ?>" 
			></td>
		</tr>
		<tr>
			<td><label>Nhập lại mật khẩu</label></td>
			<td><input type="password" name="repassword" required style="width:250px"
					   value="<?php echo isset($_POST['repassword']) ? $_POST['repassword']:''; ?>" 
			>
				<?php 
				if (isset($password) && isset($repassword) && $password != $repassword)
					echo "<div style='color:red'>Nhập lại mật khẩu sai</div>";
			?>
			</td>
		</tr>
		<tr>
			<td><label>Người giới thiệu</label></td>
			<td><input type="text" name="gioithieu" style="width:250px"
					   value="<?php echo isset($_POST['password']) ? $_POST['password']:''; ?>" 
			></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="sign_up" value="Đăng ký"></td>
		</tr>
	</table>
	</form>
</fieldset>
