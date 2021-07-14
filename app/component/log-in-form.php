<?php
session_start();

    if (isset($_POST['btnIngresar'])) {

        //capturar y asignar input values 
        $txtUsuario = isset($_POST['txtUsuario']) ? $_POST['txtUsuario'] : "";
        $txtContrasena = isset($_POST['txtContrasena']) ? $_POST['txtContrasena'] : "";

        include("../model/Login.php");
        include("../model/Persona.php");
        $login = new Login();
        $persona = new Persona();

        $login->validarSignIn($txtUsuario, $txtContrasena);
        $nombreCompleto = $persona->nombreCompleto($txtUsuario, $txtContrasena);
        $personaId = $persona->capturarPersonaId($txtUsuario, $txtContrasena);
        
        echo $personaId;

        //capturo: El nombre completo de la persona.
        $_SESSION['username'] = [
            'nombreCompleto' => $nombreCompleto,
            'personaId' => $personaId
        ];

    }
    

?>
<!-- component: log-in-form.php  -->
<div class="col-12">
    <div class="row">
        <div class="col col-lg-7 d-none d-lg-block">
            <div class="col">
                <img src="../../public/img/undraw_journey_lwlj.svg" style="width: 100%; height: 700px;" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col col-lg-5">
            <div class="container"><br><br>
                <!-- Inicio Form -->
                <form action="#" method="post">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating m-5">
                                <h2 class="text-center fs-2"><strong>PalmTree BLOG</strong> | Iniciar Sesion </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="txtuser" name="txtUsuario" placeholder="Nombre" required="required" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <label for="floatingUser">Usuario</label>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row g-2 mt-4">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="txtContrasena" name="txtContrasena" placeholder="Contraseña" required="required" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <label for="floatingContrasena">Contraseña</label>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row g-2"> 
                        <div class="col-md">
                            <button type="submit" name="btnIngresar" class="w-100 btn btn-lg fw-bold" style="background-color: #7eff63;" type="submit">Ingresar</button>
                        </div>    
                        <div class="col-md">
                            <a href="index.php" class="w-100 btn btn-lg text-light" style="background-color: #3f3d56;"  type="submit">Volver</a>
                        </div> 
                    </div>
                    <div class="row g-2 text-center">
                        <div class="col-12 p-5">
                            ¿Aun no tienes una cuenta?<a href="register.php" class="link-success"> Registrarme</a>
                        </div>
                    </div>
                </form> 
                <!-- Final form -->
                <div class="row">
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