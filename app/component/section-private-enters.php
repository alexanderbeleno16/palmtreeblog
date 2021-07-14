<?php

require_once("../model/Entrada.php");
$entrada = new Entrada();

$cantidadEntradas = $entrada->cantidadEntradasPrivadas();
$entradas = $entrada->capturarEntradasPrivadas();

?>

<!-- component: section-global-enters.php -->
<div class="container">
    <div class="col-12 mb-3">
        <h5 class="text-success fw-bold fs-3 fst-italic mt-5">Mis Entradas: <strong>(<?php echo $cantidadEntradas; ?>)</strong> <i class="bi bi-bookmark-star-fill"></i>
    </h5>
    </div>
    <?php 
        $row = "";
        while ($row = mysqli_fetch_array($entradas)) {
            $datos = $row[0]."|". 
                    $row[1]."|".
                    $row[2]."|".
                    $row[3]."|".
                    $row[4]."|".
                    $row[5]."|".
                    $row[6];
    ?>
    <!-- preview card 1 -->
    <div class="col-12 my-4 d-flex justify-content-around">
        <div class="card mb-3 shadow" style="max-width: 540px; border-radius: 20px;">
            <div class="row g-0">
                <div class="col-md-7">
                    <div class="card-body">
                        <input type="hidden" value="<?php echo $row[0]; ?>"> 
                        <h5 class="card-title text-success fw-bold text-capitalize"><?php echo $row[1]; ?></h5>
                        <a href="../view/enter-full-view.php?datos=<?php echo $datos; ?>" 
                        title="Ver entrada" class="text-primary pe-auto fw-bold">Ver mas. <i class="bi bi-eye-fill"></i></a>
                        <p class="card-text mt-5 m-0 text-capitalize"><small class="text-muted">Autor: <?php echo $row[5]; ?></small></p>
                        <p class="card-text m-0"><small class="text-muted">Publicado: <?php echo $row[4]; ?></small></p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <img src="<?php echo $row[2]; ?>" width="888" height="638" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-12 col-md-1 d-flex align-items-center" style="background-color:#f0f0f0;">
                    <div class="col-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col-2 col-md-12">
                                <a href="../view/enter-full-view.php?datos=<?php echo $datos; ?>" 
                                 title="Ver entrada" class="btn border border-0 border-light btn-outline-success"><i class="bi bi-eye-fill"></i></a>
                            </div>
                            <div class="col-2 col-md-12">
                                <a href="../view/edit-enter.php?datos=<?php echo $datos; ?>" title="Editar entrada" class="btn border border-0 border-light btn-outline-primary"><i class="bi bi-pencil-fill"></i></a>
                            </div>
                            <div class="col-2 col-md-12">
                                <a href="../controller/delete-entry.php?datos=<?php echo $datos; ?>" title="Eliminar entrada" class="btn border border-0 border-light btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- final preview card 1 -->
    <?php 
        } 
    ?>
</div>