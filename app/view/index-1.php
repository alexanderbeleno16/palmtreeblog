<?php
session_start();

$nombreCompleto = isset($_SESSION['username']['nombreCompleto']) ? $_SESSION['username']['nombreCompleto'] : "";

#---------------------------------------------------------
#--------------------- view index-1.php -------------------------
#---------------------------------------------------------
if ($nombreCompleto) {
    //components
    include("../component/head.php"); //header
    include("../component/navbar-1.php"); //navbar
    include("../component/section-banner-1.php"); //section banner 1
    include("../component/link-cards.php"); //section links
    include("../component/section-banner-2.php"); //section banner 2
    include("../component/footer.php"); //footer
}else{
    echo "<script type='text/javascript'>
				window.location.href='index.php';
        </script>";
}




?>