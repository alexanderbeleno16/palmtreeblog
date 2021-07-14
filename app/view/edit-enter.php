<?php
session_start();

$nombreCompleto = isset($_SESSION['username']['nombreCompleto']) ? $_SESSION['username']['nombreCompleto'] : "";

#---------------------------------------------------------
#--------------------- view edit-enters.php -------------------------
#---------------------------------------------------------

if ($nombreCompleto) {
    //components
    include("../component/head.php"); //header
    include("../component/section-edit-enter-form.php"); //crear entradas
    include("../component/footer.php"); //footer
}else{
    echo "<script type='text/javascript'>
				window.location.href='index.php';
        </script>";
}


?>