<?php

    if (isset($_POST['btn-enviar'])) {

        //capturar y asignar input values 
        $txtNombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
        $txtCorreo = isset($_POST['txtCorreo']) ? $_POST['txtCorreo'] : "";
        $txtAsunto = isset($_POST['txtAsunto']) ? $_POST['txtAsunto'] : "";

        include("../model/Contacto.php");
        $contacto = new Contacto();

        $contacto->guardarContacto($txtNombre, $txtCorreo , $txtAsunto);


    }


?>

<!-- component: contact-form.php -->
<div class="container">
    <div class="row d-flex align-items-center">
        <div class="col-12 col-lg-6 ">  
            <div class="row g-2">
                <div class="col-md ">
                    <div class="form-floating mb-5 text-center">
                        <img src="../../public/img/palmera.png" width="290" height="290" class="img-fluid rounded-circle shadow" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="container"><br><br>
                <form action="#" method="post">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-5">
                                <h3 class="text-center text-secondary"><strong>PalmTree BLOG</strong> | Contactanos </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="txtNombre" id="txtNombreContact" placeholder="Nombre" required="required" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <label for="floatingUser">Nombre</label>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="row g-2 mt-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="txtCorreo" id="txtCorreoContact" placeholder="Correo" required="required" maxlength="32" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <label for="floatingContrasena">Correo</label>
                            </div>
                        </div>
                    </div>
                    <div class="container mb-4">
                        <div class="rounded-3 row">
                            <textarea type="text" class="col border border-success" style=" border-radius: 20px;" name="txtAsunto" id="txtMensajeContact" spellcheck="true" cols="63" rows="4" placeholder="  ¿Sobre qué quieres hablar?" required="" maxlength="989" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"></textarea>
                        </div>
                    </div>
                    <hr class="my-1">
                    <div class="row g-2 mt-2"> 
                        <div class="col-md">
                            <button name="btn-enviar" class="w-100 btn btn-lg fw-bold" style="background-color: #7eff63;" type="submit">Enviar</button>
                        </div>  
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-12 col-md text-center">
                        <h5 class="fs-6 fst-italic text-secondary">
                            <i class="bi bi-code-slash"></i> Designed and developed by Alexander Beleño Mackenzie.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>