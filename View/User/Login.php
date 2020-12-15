<div class="card">
<div class="card-body">
	<h2 class="text-center"><span><a href="login.php?mod=user&act=login">Đăng nhập hệ thống</a></span></h2>
     <p>
     <form method="post" action="login.php?mod=user&act=login" onsubmit="return IsLogin();" class="form">
        <p><label>Tên đăng nhập</label><input class="form-control" type="text" name="txtUserName" id="txtUserName" /></p>
        <p><label>Mật khẩu</label><input class="form-control" type="password" name="txtPassWord" id="txtPassWord" /></p>
        <p class="text-center"><input type="submit" name="btnLogin" id="btnLogin" value="Đăng nhập" class="btn btn-primary mx-auto"/></p>
        <p id="error"></p>
    </form>
     </p>
</div> 
</div> 
</div>