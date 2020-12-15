<div class="card">
<div class="card-body text-center">
<h2><span><a href="login.php?mod=user&act=login">Đổi thông tin cá nhân</a></span></h2>
     <p>
<form action="login.php?mod=user&act=update" method="post" class="form" onsubmit="return IsUpdateUser()">
	<p><label>Họ tên</label><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row['FullName']; ?>" class="form-control"/></p>
    <p><label>Email</label><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row['Email'] ?>" class="form-control"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" class="btn-primary btn" id="btnChange" value="Đổi thông tin"/></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>
</div>