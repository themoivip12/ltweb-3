<div class="card">
<div class="card-body">
	<center><h2>Thông tin cá nhân</h2></center>
	<table class="mx-auto">
	  <?php
	  	echo "<tr><td>Họ tên:</td><td>". $row['FullName']. "</td></tr>";
		echo "<tr><td>Tên đăng nhập:</td><td>".$row['UserName']."</td></tr>";
		echo "<tr><td>Email:</td><td>".$row['Email']."</td></tr>";
	  ?>
  	</table>
  	  <?php
  	echo "<div class=\"text-center\"><a class=\"btn btn-primary mx-3 mt-4 text-light\" href=\"login.php?mod=user&act=changepassword\">Đổi mật khẩu</a>";
	echo "<a class=\"btn btn-primary mx-3 mt-4 text-light\" href=\"login.php?mod=user&act=update\">Đổi thông tin</a></div>";
	?>
	</div>
</div>