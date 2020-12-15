<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->
<div class="container">
    <div class="card">
        <div class="row my-10">
            <div class="mx-auto col-md-8">
            <?php
    
    if(isset($_GET['mod'])){
        $a = ucfirst($_GET['mod']);
        $b = ucfirst($_GET['act']);

        include_once("Controller/".$a."/".$b.".php");
    }

    
?>
            </div>

        </div>
    </div>
</div>
     <!--End Main-->
    <!--Start Phan loai-->
    <!--End Phan loai-->
    <!--Start Footer-->
    <?php
        include_once("View/Footer.php");
    ?>

<?php
    ob_end_flush();
?>