<?php include 'variables/variables.php';

$page = "Servicios";
$nombre_inmobiliaria = "Acriformas"
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
    <?php include 'layout/header.php' ?>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margen_top position-relative">

        <div class="imagen w-100 h-100 position-absolute">
            <img class="h-100 w-100" src="images/banner_servicios.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Servicios </h1>
        </div>

    </section>
    <!-- BANNER -->

    <!-- NUUESTRA OFERTA -->
    <section id="nuestra_oferta" class=" py-5">


        <div class="d-flex container">
            <!-- TEXTO COTIZA EN LINEA -->
            <div class="col-6 d-flex align-items-center justify-content-center flex-column">
                <h4 class="c mb-2 text-center"> Que hacemos </h4>
                <h2 class="font-weight-bold mb-3 text-center"> NUESTRA OFERTA </h2>
                <p class="text-center"> Creamos soluciones publicitarias y de comunicación integrales </p>

                <!-- BOTON -->
                <a class="btn boton_de_oferta mt-3" href="">

                    <p class="texto"> Cotiza en línea </p>

                    <div class="w-100 h-100 boton_oferta">

                    </div>

                    <div class="w-100 h-100 hover_oferta"></div>
                </a>
                <!-- BOTON -->


            </div>
            <!-- TEXTO COTIZA EN LINEA -->

            <!-- SLIDER DE IMAGENES -->
            <div class="col-6">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/servicios1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/servicios2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/servicios3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- IMAGENES -->



                    <!-- BOTON IZQUIERDA -->
                    <a class="btn boton_de_oferta_flecha_izquierda mt-3" href="#carouselExampleControls" role="button" data-slide="prev">

                        <p class="texto "> <i class="fas fa-angle-left"></i> </p>

                        <div class="w-100 h-100 boton_oferta">

                        </div>

                        <div class="w-100 h-100 hover_oferta"></div>
                    </a>
                    <!-- BOTON IZQUIERDA -->


                    <!-- BOTON DERECHA -->
                    <a class="btn boton_de_oferta_flecha_derecha mt-3" href="#carouselExampleControls" role="button" data-slide="next">

                        <p class="texto "> <i class="fas fa-angle-right"></i> </p>

                        <div class="w-100 h-100 boton_oferta">

                        </div>

                        <div class="w-100 h-100 hover_oferta"></div>
                    </a>
                    <!-- BOTON DERECHA -->


                </div>

            </div>
            <!-- SLIDER DE IMAGENES -->

        </div>

    </section>
    <!-- NUUESTRA OFERTA -->

    <!-- SERVICIOS -->
    <section id="servicios" class="d-flex flex-wrap align-items-stretch justify-content-center container my-5">

        <div class="m-2 col-3 rounded border d-flex flex-column align-items-center justify-content-center">

            <div class="imagen d-flex align-items-center justify-content-center">
                <img src="images/impresora.png" alt="">
            </div>

            <h2 class="font-weight-bold my-4 text-center"> IMPRESIÓN DIGITAL </h2>

            <p class="text-center"> Trabajamos sobre sustrato como vinilo, banner, back-lite, panaflex, foam board, papel fotografico... </p>

            <a class="boton_leer_mas position-absolute my-3" href="s_digital.php">

                <p class="d-flex align-items-center justify-content-center  leer_mas position-relative"> Leer más <i class="icono ml-2 fas fa-angle-right"> </i> </p>



            </a>

        </div>

        <div class="m-2 col-3 rounded border d-flex flex-column align-items-center justify-content-center">

            <div class="imagen d-flex align-items-center justify-content-center">
                <img src="images/impresora_g.png" alt="">
            </div>

            <h2 class="font-weight-bold my-4 text-center"> IMPRESIÓN OFFSET </h2>

            <p class="text-center"> Nuestro servicio de impresión offset cuenta con completas y modernas herramientas... </p>

            <a class="boton_leer_mas position-absolute my-3" href="s_offset.php">

                <p class="d-flex align-items-center justify-content-center  leer_mas position-relative"> Leer más <i class="icono ml-2 fas fa-angle-right"> </i> </p>

            </a>

        </div>

        <div class="m-2 col-3 rounded border d-flex flex-column align-items-center justify-content-center">

            <div class="imagen d-flex align-items-center justify-content-center">
                <img src="images/papel.png" alt="">
            </div>

            <h2 class="font-weight-bold my-4 text-center"> FERIAS Y EVENTOS </h2>

            <p class="text-center"> Diseñamos estructuras de fácil manejo y movilidad, contamos con materiales y tipos de avisos... </p>

            <a class="boton_leer_mas position-absolute my-3" href="s_eventos.php">

                <p class="d-flex align-items-center justify-content-center  leer_mas position-relative"> Leer más <i class="icono ml-2 fas fa-angle-right"> </i> </p>



            </a>

        </div>

        <div class="m-2 col-3 rounded border d-flex flex-column align-items-center justify-content-center">

            <div class="imagen d-flex align-items-center justify-content-center">
                <img src="images/camisa.png" alt="">
            </div>

            <h2 class="font-weight-bold my-4 text-center"> MERCHANDISING </h2>

            <p class="text-center"> Trabajamos sobre sustrato como vinilo, banner, back-lite, panaflex, foam board, papel fotografico... </p>

            <a class="boton_leer_mas position-absolute my-3" href="s_merchandising.php">

                <p class="d-flex align-items-center justify-content-center  leer_mas position-relative"> Leer más <i class="icono ml-2 fas fa-angle-right"> </i> </p>



            </a>

        </div>

        <div class="m-2 col-3 rounded border d-flex flex-column align-items-center justify-content-center">

            <div class="imagen d-flex align-items-center justify-content-center">
                <img src="images/circulo.png" alt="">
            </div>

            <h2 class="font-weight-bold my-4 text-center"> BIENESTAR Y EVENTOS EMPRESARIALES </h2>

            <p class="text-center"> Trabajamos sobre sustrato como vinilo, banner, back-lite, panaflex, foam board, papel fotografico... </p>

            <a class="boton_leer_mas position-absolute my-3" href="s_bienestar.php">

                <p class="d-flex align-items-center justify-content-center  leer_mas position-relative"> Leer más <i class="icono ml-2 fas fa-angle-right"> </i> </p>



            </a>

        </div>

        <div class="m-2 col-3 rounded border d-flex flex-column align-items-center justify-content-center">

            <div class="imagen d-flex align-items-center justify-content-center">
                <img src="images/folleto.png" alt="">
            </div>

            <h2 class="font-weight-bold my-4 text-center"> SEÑALIZACIÓN INDUSTRIAL </h2>

            <p class="text-center"> Trabajamos sobre sustrato como vinilo, banner, back-lite, panaflex, foam board, papel fotografico... </p>

            <a class="boton_leer_mas position-absolute my-3" href="s_industrial.php">

                <p class="d-flex align-items-center justify-content-center  leer_mas position-relative"> Leer más <i class="icono ml-2 fas fa-angle-right"> </i> </p>



            </a>

        </div>






    </section>
    <!-- SERVICIOS -->










    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>