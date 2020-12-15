<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->

    <div id="page" class="container">
        <div id="page-in" class="row">
            <div class="col-3">
                <div class="list-group mt-7">
                    <a href="admin.php?mod=products&act=manage" class="list-group-item list-group-item-action">Quản lý sản phẩm</a>
                    <a href="admin.php?mod=category&act=manage" class="list-group-item list-group-item-action">Quản lý nhóm</a>
                    <a href="admin.php?mod=user&act=manage" class="list-group-item list-group-item-action">Quản lý thành viên</a>
                </div>
            </div> <!-- /col -->
            <!-- Content -->
            <div class="col-9" id="content">
            <?php                    
                    if(isset($_GET["mod"]))
                    {
                         $a = ucfirst($_GET['mod']);
                         $b = ucfirst($_GET['act']);
                        include_once("Controller/".$a."/".$b.".php");
                        // $x = "Controller/".$a."/".$b.".php";
                        // echo "<script>console.log('$x');</script>";
                    }
                    else
                    {
                        include_once("Controller/Products/Manage.php");
                    }
            ?>
            </div> <!-- /content -->

            <!-- Right column -->
           



        </div> <!-- /page-in -->
        </div> <!-- /page -->
    <!--End content-->

<div style="clear: both;"></div>
     <!--End Main-->
    
    <!--Start Footer-->
    <?php
        include_once("View/Footer.php");
    ?>

<?php
    ob_end_flush();
?>