<form method="post" action="" style="position:absolute; top:60px; left:250px">
<select name="pagination">
	<option value="10" <?php echo ($_SERVER["REQUEST_METHOD"]=="POST")&&($_POST["pagination"]==10) ? "selected":""; ?>>10 người</option>
	<option value="20" <?php echo ($_SERVER["REQUEST_METHOD"]=="POST")&&($_POST["pagination"]==20) ? "selected":""; ?>>20 người</option>
	<option value="50" <?php echo ($_SERVER["REQUEST_METHOD"]=="POST")&&($_POST["pagination"]==50) ? "selected":""; ?> >50 người</option>
	<option value="100" <?php echo ($_SERVER["REQUEST_METHOD"]=="POST")&&($_POST["pagination"]==100) ? "selected":""; ?>>100 người</option>
</select>
<input type="submit" value="Hiển thị">	
</form>
<fieldset style="width:750px; text-align:center; margin:50px 250px; position:absolute; top:40px;">
	<legend>Danh sách user</legend>
	<table style=" border-collapse: collapse;">
		<tr>
			<th style="border:1px solid black; width:100px; ">img</th>
			<th style="border: 1px solid black; width:250px; ">Tên đầy đủ</th>
			<th style="border: 1px solid black; width:100px; ">gioi tinh</th>
			<th style="border: 1px solid black; width:200px; ">ngay tham gia</th>
			<th style="border: 1px solid black; width:200px; ">Mức thành viên</th>
			<?php 
				if ($quyen>0){
			?>
					<th style="border: 1px solid black; width:150px; "></th>
			<?php } ?>
			<?php
				if ($quyen==2){
			?>
				<th style="border: 1px solid black; width:200px; ">Chỉnh sửa quyền</th>
			<?php } ?>
		</tr>
		<?php 
			foreach ($arr as $value) {
				# code...
		?>
		<tr>
			<td style="border:1px solid black; line-height:60px"><a href="index.php?controller=user&id=<?php echo $value['pk_user_id'];?>"><img style=" width: 50px; height: 50px; margin-top: 20px "src="<?php echo $value['img']; ?>"></a></td>
			<td style="border:1px solid black;"><a href="index.php?controller=user&id=<?php echo $value["pk_user_id"]; ?>"><?php echo $value["fullname"]; ?></a></td>
			<td style="border:1px solid black;"><?php echo ($value["gioitinh"]==1) ? "Nam":"Nữ"; ?></td>
			<td style="border:1px solid black;"><?php echo $value["ngay_tham_gia"]; ?></td>
			<th style="border: 1px solid black; width:150px; ">
				<?php
					switch ($value["quyen"]) {
						case 0:
							# code...
							echo "Thành viên";
							break;
						case 1:
							echo "Quản lý";
							break;
						case 2:
							echo "Quản trị";	
						default:
							# code...
							break;
					}
				?>
			</th>
			<?php 
			if ($quyen>0){
				if ($quyen==2){
			?>
					<td style="border: 1px solid black; width:150px; ">
						<a href="index.php?controller=delete_edit_user&act=edit&id=<?php echo $value['pk_user_id']; ?>">Edit</a>
						<a href="index.php?controller=delete_edit_user&act=delete&id=<?php echo $value['pk_user_id']; ?>" onclick="return confirm('Are you sure?')" >Delete</a>
					</td>
			<?php } ?>

			<?php 
				if ( ($quyen==1 && $value["quyen"]==0) || (isset($a) && $quyen==1 && $a["pk_user_id"]==$value["pk_user_id"])  ){
			?>
					<td style="border: 1px solid black; width:150px; ">
						<a href="index.php?controller=delete_edit_user&act=edit&id=<?php echo $value['pk_user_id']; ?>">Edit</a>
						<a href="index.php?controller=delete_edit_user&act=delete&id=<?php echo $value['pk_user_id']; ?>" onclick="return confirm('Are you sure?')" >Delete</a>
					</td>
			<?php } ?>

			<?php 
				if ( $quyen==1 && $value["quyen"]==1 && isset($a) && $a["pk_user_id"]!=$value["pk_user_id"]  ){
			?>
					<td style="border: 1px solid black; width:150px; ">
					</td>
			<?php } ?>
			
			<?php 
				if (($quyen==0 && $value["quyen"]==0 && isset($a) && $a["pk_user_id"]!=$value["pk_user_id"]) ){
			?>
					<td style="border: 1px solid black; width:150px; ">
					</td>
			<?php } 
			}?>

			<?php
				if ($quyen==2){
					if ($value["quyen"]==0){
			?>
					<td style="border: 1px solid black;"><a onclick="return confirm('Are you sure?')" 
				href="index.php?controller=admin&id=<?php echo $value['pk_user_id'] ?>">Nâng lên admod</a></td>
			<?php 
					}
			?>
			<?php
				if ($value["quyen"]==1){
			?>
					<td style="border: 1px solid black;"><a onclick="return confirm('Are you sure?')" 
				href="index.php?controller=admin&id=<?php echo $value['pk_user_id'] ?>">Hạ xuống user</a></td>
			<?php } ?>
			<?php
				if ($value["quyen"]==2){
					echo '<td style="border: 1px solid black;"></td>';
				}
			?>
			<?php 
				} 
			?>
			
			<?php } ?>
		</tr>
	</table>
	<div style="text-align:left;margin-top:10px">
<?php 
	echo "Trang&nbsp" ;
	for ($i=1; $i<=$page; $i++){
?>
		<a href="index.php?p=<?php echo $i; ?>" style="margin:0 2px"><?php echo $i; ?></a>
<?php } ?>
</div>
</fieldset>