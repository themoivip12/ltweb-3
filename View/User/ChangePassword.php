<div class="card">
<div class="card-body text-center">
<h2><span><a href="login.php?mod=user&act=login">Đổi mật khẩu</a></span></h2>
     <p>
<form action="login.php?mod=user&act=changepassword" method="post" class="form" onSubmit="return IsChangePass()">
	<p><label>Mật khẩu cũ</label><input type="password" name="txtOldPass" id="txtOldPass" class="form-control"></p>
    <p><label>Mật khẩu mới</label><input type="password" name="txtPass" id="txtPass" class="form-control"></p>
    <p><label>Mật khẩu xác nhận</label><input type="password" name="txtPrePass" id="txtPrePass" class="form-control"></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" class="btn btn-primary"/></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>
</div>