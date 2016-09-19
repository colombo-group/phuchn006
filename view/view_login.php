<fieldset style="width:400px; margin:50px auto; padding:25px">
	<legend>Đăng nhập</legend>
	<form method="post" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email" required style="width:250px"
					   value="<?php echo isset($_POST['email']) ? $_POST['email']:''; ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Mật khẩu</label></td>
			<td><input type="password" name="password" required style="width:250px"
					   value="<?php echo isset($_POST['password']) ? $_POST['password']:''; ?>" 
			></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Login" value="Đăng nhập"></td>
		</tr>
	</table>
	</form>
</fieldset>
