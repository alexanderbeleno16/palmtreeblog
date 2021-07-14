<?php
    
    if (isset($_POST['btnRegistrar'])) {

        //capturar y asignar input values 
        $txtNombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
        $txtApellido = isset($_POST['txtApellido']) ? $_POST['txtApellido'] : "";
        $txtCorreo = isset($_POST['txtCorreo']) ? $_POST['txtCorreo'] : "";
        $txtUsuario = isset($_POST['txtUsuario']) ? $_POST['txtUsuario'] : "";
        $txtContrasena = isset($_POST['txtContrasena']) ? $_POST['txtContrasena'] : "";

        include("../model/Persona.php");
        $persona = new Persona();
        
        $persona->validarDatosPersona($txtNombre, $txtApellido, $txtCorreo, $txtUsuario, $txtContrasena);

    }
    

?>
<!-- component: register-form.php  -->
<div class="col-12 bg-register">
    <div class="container bg-light">
        <br>
        <div class="col-12 rounded shadow" style="background-color: #7eff63;" >
            <h2 class="text-center fw-bold fs-2 p-3">FORMULARIO | REGISTRO</h2>
        </div>
        <div class="container d-flex justify-content-center mt-5">
            <form action="#" method="post" class="col">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" required="required" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label for="floatingNombre">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellido" required="required" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label for="floatingApellido">Apellido</label>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Correo" required="required" maxlength="32" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label for="floatingCorreo">Correo</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtusuario" name="txtUsuario" placeholder="Contraseña" required="required" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label for="floatingUsuario">Usuario</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="txtpassword" name="txtContrasena" placeholder="Contraseña" required="required" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2"> 
                    <div class="col-md">
                        <button type="submit" name="btnRegistrar" class="w-100 btn btn-lg fw-bold" style="background-color: #7eff63;" type="submit">Registrarme</button>
                    </div>    
                    <div class="col-md">
                        <a href="index.php" class="w-100 btn btn-lg text-light" style="background-color: #3f3d56;"  type="submit">Volver</a>
                    </div> 
                </div>
                <div class="row g-2 text-center">
                    <div class="col-12 p-5">
                        ¿Tienes una cuenta?<a href="log-in.php" class="link-primary"> Iniciar sesión</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>