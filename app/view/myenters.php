<?php
session_start();

$nombreCompleto = isset($_SESSION['username']['nombreCompleto']) ? $_SESSION['username']['nombreCompleto'] : "";


#---------------------------------------------------------
#--------------------- view myenters.php -------------------------
#---------------------------------------------------------

if ($nombreCompleto) {
    //components
    include("../component/head.php"); //header
    include("../component/navbar-1.php"); //navbar
    include("../component/section-boton.php"); //boton crear entrada (Ya habiendo iniciado sesion)
    include("../component/section-private-enters.php"); //section todas las entradas globales
    include("../component/footer.php"); //footer
}else{
    echo "<script type='text/javascript'>
				window.location.href='index.php';
        </script>";
}


?>