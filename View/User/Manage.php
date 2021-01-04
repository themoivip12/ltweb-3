<div class="bg-white p-4">
	<div class="d-flex justify-content-between mb-7">
		<h3 class="mb-0"><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></h3>
		<a class="btn btn-primary" href="admin.php?mod=user&act=register">Thêm sản phẩm</a>
	</div>


	<table width="100%" class="table">
    <tr class="title"><th>Họ tên</th><th>Tên đăng nhập</th><th>Nhóm</th><th>Email</th><th>Xóa</th><th>Sửa</th></tr>
    <?php

	foreach($ret as $row)
	{
			echo "<tr><td>";
			echo $row['FullName']."</td><td>";
			echo $row['UserName']."</td><td>";
			echo $row['GroupName']."</td><td>";
			echo $row['Email']."</td><td>";
			echo "<a href=\"admin.php?mod=user&act=delete&id={$row["UserID"]}\" onclick=\"return IsDelete()\"><i class=\"text-danger fas fa-trash-alt\"></i></a></td><td>";
			echo "<a href=\"admin.php?mod=user&act=edit&id={$row["UserID"]}\"><i class=\"text-success fas fa-edit\"></i></a>";
			echo "</td></tr>";
	}
	?>
    </table>
</p>
</div>