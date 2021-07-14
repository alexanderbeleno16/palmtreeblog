<?php
include("redirect-modal.php");// Redirect Modal
?>

<!-- component: navbar.php -->
<header class="navbar navbar-expand-md navbar-dark bd-navbar px-3 py-2 text-white col-12 sticky-top shadow-lg" style="background-color: #ffffff;">
    <div class="container-xxl flex-wrap flex-xl-nowrap" aria-label="Main navigation">

        <a href="../view/index.php"
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
                    <a class="nav-link p-2 active text-dark fw-bold" href="../view/index.php">Home</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 text-dark" href="../view/blog.php">Blog</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 text-dark" href="../view/contact.php">Contacto</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2 text-light btn fw-bold" style="background-color: #9fc74e;" href="#redirect-modal" data-bs-toggle="modal">CREAR BLOG</a>
                </li>
            </ul>

        </div>
    </div>
</header>