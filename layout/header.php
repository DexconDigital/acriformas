<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/pre-loader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->

<header class="w-100 sticky-top position-fixed">
    <section class="container">

        <!-- LOGO Y MENU -->
        <section>
            <nav class="navbar navbar-expand-lg navbar-light">

                <a href="index.php" class="imagen_logo"> <img src="images/acriformas_full color.png" alt=""> </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENU -->
                <div class="flex-column align-items-lg-end align-items-xl-end align-items-start collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- MENU -->
                    <ul id="menu" class="navbar-nav m-auto ">

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Inicio') {
                                                    echo 'activo';
                                                } ?>" href="index.php"> Inicio </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Quiénes Somos') {
                                                    echo 'activo';
                                                } ?>" href="quienes_somos.php"> Quiénes Somos </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Servicios') {
                                                    echo 'activo';
                                                } ?>" href="servicios.php"> Servicios </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Proyectos') {
                                                    echo 'activo';
                                                } ?>" href="proyectos.php"> Proyectos </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Clientes') {
                                                    echo 'activo';
                                                } ?>" href="clientes.php"> Clientes </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Contáctenos') {
                                                    echo 'activo';
                                                } ?>" href="contactenos.php"> Contáctenos </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Noticias') {
                                                    echo 'activo';
                                                } ?>" href="noticias.php"> Noticias </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'FAQ') {
                                                    echo 'activo';
                                                } ?>" href="faq.php"> FAQ </a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li> -->

                    </ul>
                    <!-- MENU -->


                    <!-- REDES SOCIALES Y CONTACTO -->
                    <section id="redes_contacto" class="d-flex justify-content-end mr-5">


                        <a href="mailto:comercial@acriformas.com" class="correo mx-1 d-flex align-items-center justify-content-center">
                            <i class="escalar_icono icono m mr-1 fas fa-envelope"></i>
                            <p> comercial@acriformas.com </p>
                        </a>

                        <a href="mailto:comercial@acriformas.com" class="correo mx-1 d-flex align-items-center justify-content-center">
                            <i class="escalar_icono icono m mr-1 fas fa-phone"></i>
                            <p> 3114452343 </p>
                        </a>


                        <a href="https://www.facebook.com/Acriformas/ ">
                            <div class="mx-1 circulo c_facebook d-flex align-items-center justify-content-center">
                                <i class="escalar_icono m-auto fab fa-facebook-f"></i>
                            </div>
                        </a>

                        <a href="https://www.instagram.com/acriformas/">
                            <div class="mx-1 circulo c_instagram d-flex align-items-center justify-content-center">
                                <i class="escalar_icono m-auto fab fa-instagram"></i>
                            </div>
                        </a>

                        <a href="https://twitter.com/@Acriformas_co">
                            <div class="mx-1 circulo c_twitter d-flex align-items-center justify-content-center">
                                <i class="escalar_icono m-auto fab fa-twitter"></i>
                            </div>
                        </a>

                        <a href="#">
                            <div class="mx-1 circulo c_skype d-flex align-items-center justify-content-center">
                                <i class="escalar_icono m-auto fab fa-skype"></i>
                            </div>
                        </a>

                    </section>
                    <!-- REDES SOCIALES Y CONTACTO -->
                </div>
                <!-- MENU -->


            </nav>
        </section>
        <!-- LOGO Y MENU -->





    </section>
</header>