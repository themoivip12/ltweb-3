<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->
    <?php
    
        if(isset($_GET['mod'])){
            $a = ucfirst($_GET['mod']);
            $b = ucfirst($_GET['act']);

            include_once("Controller/".$a."/".$b.".php");
        }		
	?>
     <!--End Main-->
     <div class="container-fluid">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="./img/slide1.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="./img/slide2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="./img/slide3.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
    </div>
    <div class="container mt-n9 bg-secondary">
		<div class="row">
			<div class="col-lg-4 bg-white py-4 px-3">
				<div class="overflow-hidden position-relative">
					<a href="./features.html" class="animation-scale"><img class="w-100" src="./img/banner-item-1.png" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4 bg-white py-4 px-3">
				<div class="overflow-hidden position-relative">
					<a href="./features.html" class="animation-scale"><img class="w-100" src="./img/banner-item-2.png" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4 bg-white py-4 px-3">
				<div class="overflow-hidden position-relative">
					<a href="./features.html" class="animation-scale"><img class="w-100" src="./img/banner-item-3.png" alt=""></a>
				</div>
			</div>
		</div>
    </div>
    <?php
    include_once("Controller/Products/New.php");
    ?>
    <div class="container pt-8">
		<div class="row">
			<div class="col-lg-6">
				<div class="overflow-hidden position-relative mb-6">
					<a href="./features.html" class="animation-scale"><img src="./img/news-1.png" alt="" class="w-100"></a>
				</div>
				<div class="overflow-hidden position-relative mb-6">
					<a href="./features.html" class="animation-scale"><img src="./img/news-2.png" alt="" class="w-100"></a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="overflow-hidden position-relative mb-6">
					<a href="./features.html" class="animation-scale"><img src="./img/news-3.png" alt="" class="w-100"></a>
				</div>
			</div>
		</div>
    </div>
    <div class="container pt-4">
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-6 mb-lg-0">
				<div class="position-relative collection">
					<img src="./img/collection-1.png" alt="" class="w-100">
					<div class="hover-opacity-2 w-100 position-absolute">
						<div class="branch-collection position-absolute bg-white py-3 px-4">
							<a class="h5 text-primary mb-1 h6 font-weight-bold stretched-link" href="./features.html">Trang trí</a>
							<p class="font-weight-bold mb-0">12 sản phẩm</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-6 mb-lg-0">
				<div class="position-relative collection">
					<img src="./img/collection-2.png" alt="" class="w-100">
					<div class="hover-opacity-2 w-100 position-absolute">
						<div class="branch-collection position-absolute bg-white py-3 px-4">
							<a class="h5 text-primary mb-1 h6 font-weight-bold stretched-link" href="./features.html">Phòng khách</a>
							<p class="font-weight-bold mb-0">12 sản phẩm</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-6 mb-lg-0">
				<div class="position-relative collection">
					<img src="./img/collection-3.png" alt="" class="w-100">
					<div class="hover-opacity-2 w-100 position-absolute">
						<div class="branch-collection position-absolute bg-white py-3 px-4">
							<a class="h5 text-primary mb-1 h6 font-weight-bold stretched-link" href="./features.html">Ghế Phụ</a>
							<p class="font-weight-bold mb-0">10 sản phẩm</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-6 mb-lg-0">
				<div class="position-relative collection">
					<img src="./img/collection-4.png" alt="" class="w-100">
					<div class="hover-opacity-2 w-100 position-absolute">
						<div class="branch-collection position-absolute bg-white py-3 px-4">
							<a class="h5 text-primary mb-1 h6 font-weight-bold stretched-link" href="./features.html">Phòng làm việc</a>
							<p class="font-weight-bold mb-0">8 sản phẩm</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--Start Phan loai-->
    <!--End Phan loai-->
    <!--Start Footer-->
	<div class="container py-8">
		<div class="text-center">
			<h3 class="h4 font-weight-bold text-primary">HÃY LIÊN HỆ VỚI CHÚNG TÔI!</h3>
			<p>Luôn sẵn sáng hỗ trợ và tư vấn cho bạn để có sản phẩm tốt nhất.</p>
		</div>
		<div class="row pt-3">
			<div class="col-lg-6 col-md-10 mx-auto">
				<form>
					<div class="form-group row">
						<div class="col-sm-10 mb-4 mb-sm-0">
							<input type="email" class="form-control form-control-lg" id="inputEmail3" placeholder="Email của bạn">
						</div>
						<div class="col-sm-2">
							<button class="btn btn-lg btn-primary btn-block">Gửi</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
    <?php
        include_once("View/Footer.php");
    ?>

<?php
    ob_end_flush();
?>