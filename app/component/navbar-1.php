<?php

 $nombreCompleto = isset($_SESSION['username']['nombreCompleto']) ? $_SESSION['username']['nombreCompleto'] : "";

?>

<!-- component: navbar-1.php -->
<header class="navbar navbar-expand-md navbar-dark bd-navbar px-3 py-2 text-white col-12 sticky-top shadow-lg" style="background-color: #ffffff;">
    <div class="container-xxl flex-wrap flex-xl-nowrap" aria-label="Main navigation">

        <a href="../view/index-1.php"
            class="navbar-brand p-0 me-2 d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none"
            title="Bienvenido PalmTree | BLOG">
            <img src="../../public/img/palmera.png" class="img-fluid rounded-circle" alt="logo" width="60" height="60">
            <span class="fs-4 text-secondary fw-bold">PalmTree | BLOG</span>
        </a>

        <button class="navbar-toggler" style="background-color: #96be4b;" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
            aria-controls="bdNavbar" aria-expanded="true" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                </path>
            </svg>
        </button>

        <div class="navbar-collapse collapse justify-content-end" id="bdNavbar" style="">

            <hr class="d-md-none text-dark">

            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 active text-dark fw-bold" href="../view/index-1.php">Home</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 text-dark" href="../view/blog-1.php">Blog</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 text-dark" href="../view/contact-1.php">Contacto</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 text-dark" href="../view/myenters.php">Mis Entradas</a>
                </li>
            </ul>
            
            <hr class="d-md-none text-dark">

            <ul class="navbar-nav">
                <li class="nav-item dropdown col-12 col-md-auto">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perfil
                    </a>
                    <ul class="dropdown-menu dropdown-menu-md-end" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item disabled text-success">Usuario:</a></li>
                        <li>
                            <a class="dropdown-item text-capitalize">
                              <strong class="">
                                <?php 
                                    echo $nombreCompleto;
                                ?>
                              </strong>                        
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="../controller/destruirSession.php">
                            <i class="bi bi-arrow-bar-left"></i> Cerrar sesion
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</header>





