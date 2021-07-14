<?php
    $datos = $_GET['datos'];
    $array = explode('|',$datos);

    $entradaId = $array[0];
    $img_actual = $array[2];
    $entrada_titulo = $array[1];
    $entrada_asunto = $array[3];



    if (isset($_POST['btn-actualizar'])) {

        //capturar y asignar input values 
        $txtTitulo = isset($_POST['txtTitulo']) ? $_POST['txtTitulo'] : "";
        $txtAsunto = isset($_POST['txtAsunto']) ? $_POST['txtAsunto'] : "";

        $file = isset($_FILES['fileEntrada']['name']) ? $_FILES['fileEntrada']['name'] : "";

        if ($file!=NULL) {

            $ruta_de_la_carpeta = "../../public/img/entrada_multimedia/";
            $imagen = basename($_FILES['fileEntrada']['name']);
            $nombre = pathinfo($imagen, PATHINFO_FILENAME);
            $extension = pathinfo($_FILES['fileEntrada']['name'],PATHINFO_EXTENSION);
            $directorio_imagen = $ruta_de_la_carpeta . $imagen;
            $ruta_temporal = $_FILES['fileEntrada']['tmp_name'];

            require_once("../model/Entrada.php");
            $entrada = new Entrada();
            
            $entrada->actualizarEntrada($extension, $ruta_de_la_carpeta, $imagen, $ruta_temporal, $directorio_imagen, $nombre, $txtTitulo, $txtAsunto, $entradaId, $img_actual);

            // echo("<pre>");
            // echo("nombre temporal".var_dump($ruta_temporal));
            // echo("</pre>");
        }else{
            if (($entrada_titulo == $txtTitulo)&&($entrada_asunto == $txtAsunto)) {
                    
                //llamar metodo alerta de no se realizo ningun cambio o redireccionar a mis entradas 
                echo "<script type='text/javascript'>
                                    window.location.href='../view/myenters.php';
                                    </script>";

            }else {
                
                // llamar metodo de entradas = actualizar entrada pero sin imagen
                require_once("../model/Entrada.php");
                $entrada = new Entrada();

                $entrada->updateEntradaSinImagen($txtTitulo, $txtAsunto, $entradaId);
                echo "<script type='text/javascript'>
                                    window.location.href='../view/myenters.php';
                                    </script>";

            }
        }

    }
    

?>

<!-- component: section-create-enter-form.php -->
<div class="container">
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 mt-4 mb-3 d-flex align-items-center">
                <a href="../view/myenters.php" class="fw-bold btn text-light rounded-pill shadow btn-lg" style="background-color: #9fc74e;"><i class="bi bi-caret-left-fill"></i></i></a>
                <a href="../view/myenters.php" class="fw-bold fs-3 text-decoration-none mx-1" style="color: #9fc74e;"> Ver mis entradas</a>
            </div>
        </div>
        <div class="row g-2 mt-4">
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="hidden" value="<?php echo $array[0]; ?>">
                    <input type="text" value="<?php echo $array[1]; ?>" class="form-control border border-4 border-success border-top-0 border-start-0 border-end-0" name="txtTitulo" id="txtTitulo" placeholder="Titulo de la entrada" required="required" maxlength="30" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    <label for="floatingUser" class="text-success"><i class="bi bi-textarea-t fs-5"></i> Titulo de la entrada</label>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <div class="row g-2 mt-4 d-flex align-items-center">
            <div class="col-12 col-md-6 mb-5">
                <div class="container">
                    <div class="col-12">
                        <h4 class="fw-bold fs-4 text-start text-capitalize" style="color: #9fc74e;"><i class="bi bi-file-earmark-image fs-1"></i> Imagen actual:</h4>
                    </div>
                    <div class="col-12">
                        <img src="<?php echo $array[2]; ?>" class="img-fluid rounded shadow"  alt="">
                    </div>
                    <div class="col-12 mt-3">
                        <h4 class="fw-bold fs-4 text-start text-capitalize" style="color: #9fc74e;"><i <i class="bi bi-file-earmark-plus-fill fs-1"></i> Añade una nueva imagen a tu entrada</h4>
                    </div>
                    <div class="col-12">
                        <input class="form-control form-control-lg" name="fileEntrada" id="file" type="file">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container">
                    <div class="col-12">
                        <h4 class="fw-bold fs-4 text-end text-capitalize" style="color: #9fc74e;"><i class="bi bi-textarea-t fs-1"></i> Añade contenido a tu entrada*</h4>
                    </div>
                    <div class="container mb-4">
                        <div class="rounded-3 row">
                            <textarea type="text" class="col border border-success" style=" border-radius: 20px;" name="txtAsunto" id="txtMensajeEntrada" spellcheck="true" cols="63" rows="8" placeholder="  ¿Sobre qué quieres hablar?" required="required" maxlength="989" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"><?php echo $array[3]; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-12  mb-3 d-flex align-items-center justify-content-center">
                <button type="submit" name="btn-actualizar" class="fw-bold fs-4 btn btn-lg rounded-pill text-light" style="background-color: #9fc74e;"><i class="bi bi-cursor-fill"></i> Actualizar</button>
            </div>
        </div>
    </form>
</div>