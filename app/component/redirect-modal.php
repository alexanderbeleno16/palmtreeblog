<!-- component: redirect-modal.php -->
<div class="modal fade" id="redirect-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-3" id="exampleModalToggleLabel">
                    <img src="../../public/img/palmera.png" width="50" height="50" alt="mega"> Hola, ¡bienvenido! </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h4 class="text-center">¡Empieza creando tu primer PalmTree blog!</h4>
                    <br>
                    <img src="../../public/img/undraw_nature_m5ll.svg" class="img-fluid rounded" alt="img_i">
                    <div class="row text-center mt-4">
                        <div class="col text-center card-animation">
                            <button class="btn fs-3 text-light" style="background-color: #3f3d56;" data-bs-target="#confirm-redirect-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Iniciar Sesión</button>
                        </div>
                    </div>
                    <br>
                    <h5 class="text-justify"><i class="bi bi-card-heading"></i> Inicia Sesión para postear tus mejores momentos, sumate a compartir con todo el mundo los mejores lugares del planeta.</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="modal fade" id="confirm-redirect-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalToggleLabel2">Hola! Soy tu asistente,
                        <strong>byAlex!</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../../public/img/undraw_Faq_re_31cw.svg" class="img-fluid rounded"  alt="img_alex">
                    <br><br>
                    <ul>
                        <li>
                            <h5>Wow... un momento! Creo que es primera vez que te veo por aqui... No recuerdo muy bien.<br><br></h5>
                        </li>
                    </ul>
                    <h5 class="text-center"><strong>¿Ya tienes un usuario y contraseña?</strong></h5>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col text-right">
                                <a href="../view/log-in.php" style="background-color: #7eff63;" type="button" class="btn col-4 text-dark fw-bold">Si</a>
                            </div>
                            <div class="col text-left">
                                <a href="../view/register.php" style="background-color: #3f3d56;" type="button" class="btn col-4 text-light">No</a>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
</div>