<div class="maincontent-area pt-8">
        <div class="container">
            <div class="text-center">
			    <h3 class="h4 font-weight-bold text-primary">Sản phẩm mới</h3>
			    <p>Cập nhật những sản phẩm mới nhật</p>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 no-gutters">
<?php
	foreach($rs as $row){
		// $chuoi = <<<EOD
							
				echo "<div class=\"col\">";
                echo    "<div class=\"p-3 bg-white border border-light product\">";
                echo        "<img class=\"w-100\" src=\"upload/{$row['ImageUrl']}\">";
                echo        "<div class=\"product-hover\">";
                echo           "<a href=\"input.php?mod=products&act=detail&id={$row['ProductID']}\" onclick=\"return insertCart({$row['ProductID']})\" class=\"btn btn-light py-2 border-dark border btn-product rounded-circle\"><i class=\"fas fa-search-plus h5 mb-0\"></i></a>";
                           
                echo       "</div>";
                
                echo    "<div class=\"pt-4\">";
                echo        "<p class=\"mb-2\"><a href=\"input.php?mod=products&act=detail&id={$row['ProductID']}\">{$row['ProductName']}</a></p>";
                echo       "<span class=\"text-danger h6\">{$row['Price']}$</span>";
                echo    "</div>";
                echo "</div>";
                echo   "</div>";
	}
	
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 