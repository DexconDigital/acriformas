<?php include 'variables/variables.php';
$page = "Inicio";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivos_header.php' ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>


    <!-- HEADER -->
    <header class="w-100 sticky-top position-fixed">
        <section class="container">

            <!-- LOGO Y MENU -->
            <section>
                <nav class="navbar navbar-expand-lg navbar-light">

                    <div class="imagen_logo"> <img src="images/acriformas_full color.png" alt=""> </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="flex-column align-items-lg-end align-items-xl-end align-items-start collapse navbar-collapse" id="navbarSupportedContent">

                        <ul id="menu" class="navbar-nav m-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> Inicio </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> Quienes Somos </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> Servicios </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> Proyectos </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> Clientes </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> Contactenos </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> Noticias </a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="#"> FAQ </a>
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

                        <!-- REDES SOCIALES Y CONTACTO -->
                        <section id="redes_contacto" class="d-flex justify-content-end mr-5">


                            <a href="mailto:comercial@acriformas.com" class="correo mx-1 d-flex align-items-center justify-content-center">
                                <i class="icono mr-1 fas fa-envelope"></i>
                                <p> comercial@acriformas.com </p>
                            </a>

                            <a href="mailto:comercial@acriformas.com" class="correo mx-1 d-flex align-items-center justify-content-center">
                                <i class="icono mr-1 fas fa-phone"></i>
                                <p> 3114452343 </p>
                            </a>


                            <a href="#">
                                <div class="mx-1 circulo c_facebook d-flex align-items-center justify-content-center">
                                    <i class="m-auto fab fa-facebook-f"></i>
                                </div>
                            </a>

                            <a href="#">
                                <div class="mx-1 circulo c_instagram d-flex align-items-center justify-content-center">
                                    <i class="m-auto fab fa-instagram"></i>
                                </div>
                            </a>

                            <a href="#">
                                <div class="mx-1 circulo c_twitter d-flex align-items-center justify-content-center">
                                    <i class="m-auto fab fa-twitter"></i>
                                </div>
                            </a>

                        </section>
                        <!-- REDES SOCIALES Y CONTACTO -->
                    </div>

                </nav>
            </section>
            <!-- LOGO Y MENU -->






        </section>
    </header>
    <!-- HEADER -->

    <!-- IMAGENES PRINCIPALES -->
    <section id="imagenes_principales" class="margen_top">

        <div class="imagen">
            <img src="images/publicidad.jpg" alt="">
        </div>

    </section>
    <!-- IMAGENES PRINCIPALES -->

    <!-- SERVICIOS -->
    <section id="servicios">

        <div class="d-flex">

            <div class="izquierda d-flex align-items-start justify-content-center flex-column col-3">
                <h2 class="mb-3 font-weight-bold"> Servicios </h2>
                <p> Tanto en nuestras oficinas como en línea, puedes encontrar las más completa soluciones en comunicación gráfica integral. </p>
            </div>

            <div class="derecha p-0 col-9 d-flex flex-wrap">

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono1 col-2">
                    <img src="images/impresora.png" alt="">
                    <p class="text-center mt-2"> Impresión digital </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono2 col-2">
                    <img src="images/impresora_g.png" alt="">
                    <p class="text-center mt-2"> Impresión offset </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono3 col-2">
                    <img src="images/folleto.png" alt="">
                    <p class="text-center mt-2"> Señalización industrial </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono4 col-2">
                    <img src="images/circulo.png" alt="">
                    <p class="text-center mt-2"> Bienestar y eventos empresariales </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono5 col-2">
                    <img src="images/papel.png" alt="">
                    <p class="text-center mt-2"> Ferias y eventos </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono6 col-2">
                    <img src="images/camisa.png" alt="">
                    <p class="text-center mt-2"> Merchandising</p>
                </a>

            </div>

        </div>

    </section>
    <!-- SERVICIOS -->

    <!-- SECCION1 -->
    <section id="seccion1" class="d-flex aling-items-center justify-content-center container mt-5">

        <div class="col-7">

            <h4 class="m"> Bienvenido a: </h4>
            <h2 class="mt-3 font-weight-bold"> ACRIFORMAS PUBLICIDAD S.A.S. DIGITAL & MERCHANDISING </h2>
            <p class="mt-2 text-justify"> Somos un aliado estratégico para nuestros clientes en el desarrollo de la
                comunicación gráfica de forma integral, a través de un talento humano
                competente y comprometido, generando los resultados y beneficios esperados
                mediante ideas creativas e innovadoras, eco-amigables con un enfoque de
                responsabilidad social empresarial.
            </p>

            <button class="btn boton blanco"> <p>Descubre más </p></button>
            <!-- <div class="boton_hover"> </div> -->
            <!-- <div class="boton_hover2"> </div> -->

        </div>

        <div class="col-5 p-0 d-flex justify-content-center">
            <img src="images/lupa_colores.jpg" alt="">
        </div>

    </section>
    <!-- SECCION1 -->

    <!-- SECCION1 -->
    <section id="seccion2" class="d-flex aling-items-center justify-content-center container mt-5">

        <div class="col-7">

            <h4 class="m"> Bienvenido a: </h4>
            <h2 class="mt-3 font-weight-bold"> ACRIFORMAS PUBLICIDAD S.A.S. DIGITAL & MERCHANDISING </h2>
            <p class="mt-2 text-justify"> Somos un aliado estratégico para nuestros clientes en el desarrollo de la
                comunicación gráfica de forma integral, a través de un talento humano
                competente y comprometido, generando los resultados y beneficios esperados
                mediante ideas creativas e innovadoras, eco-amigables con un enfoque de
                responsabilidad social empresarial.
            </p>

        </div>

        <div class="col-5">
            <img src="images/lupa_colores.jpg" alt="">
        </div>

    </section>
    <!-- SECCION1 -->

























    <?php include 'layout/archivos_footer.php' ?>



</body>

</html>