<div class="shopping-item mx-4">
	<a href="index.php?mod=cart&act=detail" class="d-flex align-items-center pl-md-5 pl-2 text-dark" id="btnGioHang"><i class="fas fa-shopping-cart h4 mb-0"></i><p class="mb-0 font-weight-5">Giỏ hàng</p>

	<?php
		if(isset($_SESSION['mycart'])){
			$sum=0;
			foreach($_SESSION["mycart"] as $item)
			{
				$sum+=$item;
			}
			echo "<span class=\"badge badge-primary\" id=\"sl\">".count($_SESSION["mycart"])."</span></a>";
		}
		else{
			echo "<span class=\"badge badge-primary\" id=\"sl\">"."0"."</span></a>";
		}
	?>
</div>