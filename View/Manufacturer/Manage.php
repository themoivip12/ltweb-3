<div class="bg-white p-4">
	<div class="d-flex justify-content-between mb-7">
		<h3 class="mb-0"><a href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></h3>
		<a class="btn btn-primary" href="admin.php?mod=manufacturer&act=insert">Thêm Nhà cung cấp</a>
	</div>

	<table class="table" width="100%">
    <tr class="title"><th>Mã nhà cung cấp</th><th>Tên nhà cung cấp</th><th>Xóa</th><th>Sửa</th></tr>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['ManufacturerID']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=delete&id=$row[ManufacturerID]\" onclick=\"return IsDelete()\"><i class=\"text-danger fas fa-trash-alt\"></i></a></td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=edit&id=$row[ManufacturerID]\"><i class=\"text-success fas fa-edit\"></i></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>
</div> 