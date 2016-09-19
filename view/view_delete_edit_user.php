<fieldset style="width:400px; margin:0 auto; padding:25px; position:absolute; top:80px; left:35%">
	<legend>Chỉnh sửa thông tin</legend>
	<form method="post" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label>Tên đầy đủ</label></td>
			<td><input type="text" name="fullname" required style="width:250px"
					   value="<?php 
					   echo ($_SERVER['REQUEST_METHOD']=='POST')&&isset($_POST['fullname']) ? $_POST['fullname']:$infor_user['fullname'];
					   ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Tên đăng nhập</label></td>
			<td><input type="text" name="username" required style="width:250px"
					   value="<?php echo ($_SERVER['REQUEST_METHOD']=='POST')&&isset($_POST['username']) ? $_POST['username'] : $infor_user['name']; ?>" 
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
					   value="<?php 
					   echo ($_SERVER['REQUEST_METHOD']=='POST')&&isset($_POST['email']) ? $_POST['email']:$infor_user['email'];
					   ?>" 
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
				value="<?php echo ($_SERVER['REQUEST_METHOD']=='POST')&&isset($_POST['phone']) ? $_POST['phone']: $infor_user['phone'];
				?>" 
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
				$repassword = isset($repassword) ? md5($repassword):'';
				if (isset($password) && isset($repassword) && $password != $repassword)
					echo "<div style='color:red'>Nhập lại mật khẩu sai</div>";
			?>
			</td>
		</tr>
		<tr>
			<td><label>Mô tả</label></td>
			<td><textarea rows="4" cols="33" name="des" style="" required>
				<?php echo ($_SERVER['REQUEST_METHOD']=='POST')&&isset($_POST['des'])&&($_POST['des']!='') ? $_POST['des']: $infor_user["description"]; 
				?>	
			</textarea>
			</td>
		</tr>
		<tr>
			<td><label>Ngày sinh</label></td>
			<td><input type="date" name="date" required style="width:125px"
					   value="<?php 
					   echo ($_SERVER['REQUEST_METHOD']=='POST')&&isset($_POST['date']) ? $_POST['date']: $infor_user['ngaysinh']; 
					   ?>" 
			>
			</td>
		</tr>
		<tr>
			<td><label>Giới tính</label></td>
			<td>Nam <input type="radio" name="gioitinh"  value="1"
					<?php 
						if ($_SERVER['REQUEST_METHOD']=='POST'&& $_POST['gioitinh']==1)
							echo "checked";
						elseif ($infor_user["gioitinh"]==1) {
							  	# code...
							  	echo "checked";
							  }	  
					?>
					>
				
				Nữ <input type="radio" name="gioitinh" value="0"
					<?php 
						if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['gioitinh']==0)
							echo "checked";
						elseif ($infor_user["gioitinh"]==0) {
							  	# code...
							  	echo "checked";
							  }	  
					?>
				   >
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="Cập nhật"></td>
		</tr>
	</table>
	</form>
</fieldset>
