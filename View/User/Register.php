<div class="card">
<div class="card-body">
	<h2><span><a href="login.php?mod=user&act=register">Đăng ký thành viên</a></span></h2>
  	<p>
  	<form class="form" method="post" action="login.php?mod=user&act=register" onsubmit="return IsRegister()">
        <p><label>Họ tên (*)</label><input type="text" name="txtFullName" id="txtFullName" size="30" class="form-control"/></p>
        <p><label>Tên đăng nhập (*)</label><input type="text" name="txtUserName" id="txtUserName" class="form-control"/></p>
        <p><label>Mật khẩu (*)</label><input type="password" name="txtPassWord" id="txtPassWord"  class="form-control"/></p>
        <p><label>Mật khẩu xác nhận (*)</label><input type="password" name="txtPrePass" id="txtPrePass"  class="form-control" /></p>
        <p><label>Email (*)</label><input type="text" name="txtEmail" id="txtEmail" size="30"  class="form-control"/></p>
        <p><label>&nbsp;</label><input type="submit" value="Đăng ký" name="btnRegister" id="btnRegister"  class="btn btn-primary"/></p>
        <p id="error" class="error"></p>
    </form>
  </p>
	</form>
</div>
</div>

