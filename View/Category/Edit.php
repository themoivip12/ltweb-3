<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><span><a href="admin.php?mod=category&act=edit&id=<?php echo $id; ?>">Chỉnh sửa thể loại</a></span></h2>

<form action="admin.php?mod=category&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên thể loại</label><input type="text" name="txtCategoryName" id="txtCategoryName" value="<?php echo $row['CategoryName']; ?>" class="form-control"/></p>
    <p><label>Vị trí</label><input type="text" name="txtPosition" id="txtPosition" value="<?php echo $row['Position'] ?>" class="form-control"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" class="btn btn-primary"/></p>
</form>

</div>