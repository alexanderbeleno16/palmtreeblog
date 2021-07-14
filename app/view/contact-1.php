<?php
session_start();

$nombreCompleto = isset($_SESSION['username']['nombreCompleto']) ? $_SESSION['username']['nombreCompleto'] : "";

#---------------------------------------------------------
#--------------------- view contact-1.php -------------------------
#---------------------------------------------------------

if ($nombreCompleto) {
    //components
    include("../component/head.php"); //header
    include("../component/navbar-1.php"); //navbar
    include("../component/wave-1.php"); //wave-1
    include("../component/contact-form.php"); //contact form 
    include("../component/wave-2.php"); //wave-2
    include("../component/footer.php"); //footer
}else{
    echo "<script type='text/javascript'>
				window.location.href='index.php';
        </script>";
}
?>