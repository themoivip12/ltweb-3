	
<div class="bg-white p-4">
	<div class="d-flex justify-content-between mb-7">
		<h3 class="mb-0"><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></h3>
		<a class="btn btn-primary" href="admin.php?mod=products&act=insert">Thêm sản phẩm</a>
	</div>


	<table class="table" width="100%">
    <tr><th>Ảnh sản phẩm</th><th>Tên sản phẩm</th><th>Thể loại</th><th>Giá</th><th>Số lượng</th><th class="text-center">Xóa</th><th class="text-center">Sửa</th></tr>
    <?php

	foreach($ret as $row)
	{
		echo "<tr><td class=\"py-5\">";
		echo "<img src=\"upload/$row[ImageUrl]\" width=\"150\" /></td><td>";
		echo $row['ProductName']."</td><td>";
		echo $row['CategoryName']."</td><td>";
		echo "Giá ".number_format($row["Price"],0)." VND</td><td>";
		echo $row['Quantity']."</td><td class=\"text-center\">";
		
		echo "<a href=\"admin.php?mod=products&act=delete&id=$row[ProductID]\" onclick=\"return IsDelete()\"><i class=\"text-danger fas fa-trash-alt\"></i></a></td><td class=\"text-center\">";
		echo "<a href=\"admin.php?mod=products&act=edit&id=$row[ProductID]\"><i class=\"text-success fas fa-edit\"></i></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>


</div>