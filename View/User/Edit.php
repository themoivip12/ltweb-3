<div class="card">
<div class="card-body">
<h2><span><a href="admin.php?mod=user&act=edit&id=<?php echo $id; ?>">Chỉnh thành viên</a></span></h2>

	<form action="admin.php?mod=user&act=edit&id=<?php echo $id; ?>" method="post" class="form">
    <p><label>Tên đăng nhập</label><input readonly="readonly" type="text" name="txtUserName" id="txtUserName" class="form-control" value="<?php echo $row['UserName']; ?>"/></p>
	<p><label>Họ tên</label><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row['FullName']; ?>" class="form-control"/></p>
    <p><label>Email</label><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row['Email'] ?>" class="form-control"/></p>
        <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" class="btn btn-primary" /></p>
    </form>

</div>
</div>