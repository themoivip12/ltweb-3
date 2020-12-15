<div class="container-fluid">
        <img src="./img/banner-feature.png" alt="" class="w-100">
    </div>
    <div class="container pt-8">
    <div class="d-flex justify-content-between mb-6">
            <div class="d-flex"><i class="fas fa-sliders-h mr-2"></i><h6>Bộ lọc</h6></div>
            <h3 class="text-primary h4 font-weight-bold">
                Tất cả sản phẩm
            </h3>
            <form method="post" action="input.php?mod=products&act=allproducts">
              <span>Sắp xếp theo</span>
              <select name="selectPrice" id="cbbGia">
                    <option value="all" selected="selected">--Tất cả sản phẩm--</option>
                    <option value="asc">Giá tăng dần</option>
                    <option value="des">Giá giảm dần</option>
              </select>
              <button type="submit" name="btnOK" >Ok</button>
              </form>
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

            // echo $chuoi;
  }
?>
</div>
</div>

<?php
  if($findPage>1){
    echo "<div><center>".Pages::PreNext($_GET['page'],"?mod=products&act=allproducts&",$findPage)."</center></div>";
  }
?>