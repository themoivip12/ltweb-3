
<div class="bg-white p-4 ">
<div class="d-flex justify-content-between mb-7">
		<h3 class="mb-0"><a href="admin.php?mod=category&act=manage">Quản lý nhóm</a></h3>
		<a class="btn btn-primary" href="admin.php?mod=category&act=insert">Thêm nhóm</a>
	</div>
	<table class="table" width="100%">
    <tr class="title"><th>Mã thể loại</th><th>Tên thể loại</th><th class="text-center">Xóa</th><th class="text-center">Sửa</th></tr>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['CategoryID']."</td><td>";
		echo $row['CategoryName']."</td><td class=\"text-center\">";
		echo "<a href=\"admin.php?mod=category&act=delete&id=$row[CategoryID]\" onclick=\"return IsDelete()\"><i class=\"text-danger fas fa-trash-alt\"></i></a></td><td class=\"text-center\">";
		echo "<a href=\"admin.php?mod=category&act=edit&id=$row[CategoryID]\"><i class=\"text-success fas fa-edit\"></i></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>
</div> 