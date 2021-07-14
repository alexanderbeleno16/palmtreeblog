<?php

    $datos = $_GET['datos'];
    $array = explode('|',$datos);

?>

<!-- component: section-full-view.php -->
<div class="container">
    <div class="col-12">
        <div class="row mt-4 py-5 rounded shadow-lg" style="background-color: #5e9a30;">
            <h1 class="text-light fs-1 text-capitalize px-5"><?php echo $array[1]; ?></h1>
        </div>
        <div class="row pt-3 shadow-lg bg-light ">
            <p class="text-secondary fs-6 text-capitalize px-5 text-start"><i class="bi bi-calendar3"></i> <strong>Publicado: </strong><?php echo $array[4]; ?></p>
        </div>
        <div class="row py-5 shadow-lg bg-light text-center">
            <img src="<?php echo $array[2]; ?>" class="img-fluid" alt="" 
            style="border-radius: 20px;">
        </div>
        <div class="row py-5 shadow-lg bg-light">
            <div class="col-12">
                <div class="card-body">
                    <p class="col text-secondary text-justify fs-4 text-capitalize fst-italic px-5">
                        <?php echo $array[3]; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row pt-3 mb-5 shadow rounded bg-light ">
            <p class="text-secondary fs-6 text-capitalize px-5 text-end"><strong>Autor: </strong><?php echo $array[5]; ?></p>
        </div>
    </div>
</div>