<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->
<div class="container">
            <?php
    
    if(isset($_GET['mod'])){
        $a = ucfirst($_GET['mod']);
        $b = ucfirst($_GET['act']);

        include_once("Controller/".$a."/".$b.".php");
    }

    
?>
            </div>

>
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