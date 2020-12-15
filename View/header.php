<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="./style/fontawesome-5.14.0/css/all.min.css">
	<link rel="stylesheet" href="./style/css/theme.css">
</head>
<body>
	<div class="bg-info text-center py-2">
		<small class="text-white">Trang mua hàng nội thất trực tuyến chính hãng!</small>
	</div>
	<div class="bg-white">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="col-auto d-lg-none">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="col-auto">
					<a class="navbar-brand name-logo font-weight-bold h1 mb-0" href="./index.php">Mahhome</a>
				</div>
				<div class="col d-none d-lg-block">
				<?php
                            include_once("Controller/Products/Search.php");
                        ?>
				</div>
				<div class="col-auto d-flex">
					<div class="d-flex align-items-center pl-md-5 pl-2">
						<img src="./img/phone.svg" alt="">
						<div class="d-lg-block ml-md-2 ml-0 d-none">
							<p class="small mb-0">Hotline:</p>
							<p class="mb-0 font-weight-5">1900.000.000</p>
						</div>
					</div>
					
					<div class="dropdown d-flex align-items-center ml-2">
                        
                            <?php
                        if(isset($_SESSION["lgUserID"])){
                            $chuoi1 = <<<EOD
                        <button class="btn btn-write dropdown-toggle d-flex align-items-center pl-md-5 pl-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user h4 mb-0"></i><div class="d-lg-block ml-md-2 ml-0 d-none"><p class="mb-0 font-weight-5">Tài khoản của tôi</p></div>
						</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        
						  <a class="dropdown-item" href="login.php?mod=user&act=about">Tài Khoản</a>
						  <a class="dropdown-item" href="login.php?mod=user&act=logout">Đăng xuất</a>
                        </div>

EOD;
                        echo $chuoi1;
                    }
                    else{
                        $chuoi1 = <<<EOD
                        <a class="small mb-0 text-dark" href="login.php?mod=user&act=login">Đăng Nhập</a>/<a class="text-dark small mb-0" href="index.php?mod=user&act=register">Đăng Ký</a>
                        EOD;
                        echo $chuoi1;
                    }

                    ?>
					  </div>
					  <?php
                    include_once("Controller/Cart/Cart.php");
                ?> 

				</div>
				<div class="col-12">
					
					<div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
						<ul class="navbar-nav mt-3">
							<li class="nav-item active">
								<a class="nav-link text-center text-uppercase font-weight-bold pl-0" href="./index.php">Trang chủ</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-center text-uppercase font-weight-bold" href="./input.php?mod=products&act=allproducts">Sản phẩm</a>
							</li> 
							<li class="nav-item">
								<a class="nav-link text-center text-uppercase font-weight-bold" href="./about.html">Giới thiệu</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-center text-uppercase font-weight-bold" href="./contact.html">Liên hệ</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>