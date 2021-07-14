<?php
// session_start();

    require_once("../model/Entrada.php");
    $entrada = new Entrada();

    $datos = $_GET['datos'];
    $array = explode('|',$datos);

    $entrada_id = $array[0];
    $entrada_img = $array[2];

    // echo $entrada_id." ".$entrada_img;

    $consulta = $entrada->deleteEntrada($entrada_id);

    if ($consulta) {
        unlink($entrada_img);
        
        echo "<script type='text/javascript'>
            window.location.href='../view/myenters.php';
        </script>";
    }

    

?>