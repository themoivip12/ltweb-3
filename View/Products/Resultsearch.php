<div class="maincontent-area pt-8">
        <div class="container">
            <div class="text-center">
			    <h3 class="h4 font-weight-bold text-primary">Kết quả tìm kiếm</h3>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 no-gutters">

<?php
	if($result){
		foreach($result as $row){
			// echo $row['ImageUrl'];
			$chuoi = <<<EOD
				<div class="col">
			   <div class="p-3 bg-white border border-light product">
			       <img class="w-100" src="upload/{$row['ImageUrl']}">
			       <div class="product-hover">
			          <a href="input.php?mod=products&act=detail&id={$row['ProductID']}" onclick="return insertCart({$row['ProductID']})" class="btn btn-light py-2 border-dark border btn-product rounded-circle"><i class="fas fa-search-plus h5 mb-0"></i></a>
					   
			      </div>
			
			   <div class="pt-4">
			       <p class="mb-2"><a href="input.php?mod=products&act=detail&id={$row['ProductID']}">{$row['ProductName']}</a></p>
			      <span class="text-danger h6">{$row['Price']}$</span>
			   </div>
			</div>
			  </div>		
EOD;
							echo $chuoi;
		}
	}
	else {
		echo "<p class=\"text-danger mx-auto\"\">Không tìm thấy sản phẩm nào!</p>";
	}
	?>
				
</div>