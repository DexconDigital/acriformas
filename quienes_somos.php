<?php include 'variables/variables.php';

$page = "Quiénes Somos";
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
    <header>
        <?php include 'layout/header.php' ?>
    </header>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margen_top position-relative">

        <div class="imagen w-100 h-100 position-absolute">
            <img class="h-100 w-100" src="images/banner_quienes_somos.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Quiénes somos </h1>
        </div>

    </section>
    <!-- BANNER -->

    <!-- NUESTRA HISTORIA -->
    <section id="n_historia" class="mt-5">

        <div class="d-flex container">

            <!-- IMAGEN -->
            <div class="col-6 p-0">
                <img class="w-100 h-100" src="images/AVISO VOLUMETRICO 2.jpg" alt="">
            </div>
            <!-- IMAGEN -->

            <!-- TEXTOS -->
            <div class="col-6 align-items-center justify-content-center d-flex flex-column contenido">

                <h4 class="my-3 c"> Nuestra Historia </h4>
                <h2 class="mb-4 font-weight-bold"> Nuestra Historia </h2>

                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt adipisci aliquam delectus tempore unde ab. Beatae doloremque dolor nam accusantium in. Hic voluptas eligendi labore. Voluptas optio, unde magni expedita nesciunt fuga a! Quae illo modi quis repudiandae quod doloribus deserunt corporis, sit nemo consequatur! Repellat explicabo odit molestiae dolorum. </p>

            </div>
            <!-- TEXTOS -->


        </div>

    </section>
    <!-- NUESTRA HISTORIA -->

    <!-- ESCOGERNOS -->
    <section id="escogernos" class="mt-5 py-5">

        <div class="container">

            <h4 class="verde text-center pb-3"> ACRIFORMAS PUBLICIDAD </h4>

            <h2 class="blanco font-weight-bold text-center mb-5"> ¿POR QUÉ ESCOGERNOS? </h2>

            <div class="d-flex contenido align-items-center">



                <!-- CARRUSEL CON TEXTOS: MISION VISION -->
                <div class="col-6 h-100">
                    <div class="accordion" id="accordionExample">

                        <div class="my-3">
                            <h3 class="uno font-weight-bold verde activo" data-toggle="collapse" data-target="#uno">
                                Promesa de Valor
                            </h3>

                            <div id="uno" class="collapse show" data-parent="#accordionExample">
                                <p class="blanco mt-2">
                                    Satisfacer las necesidades de nuestros clientes aportando el asesoramiento necesario para darle forma a tus ideas.
                                </p>
                            </div>
                        </div>

                        <div class="my-3">
                            <h3 class="dos font-weight-bold verde" data-toggle="collapse" data-target="#dos">
                                Misión
                            </h3>

                            <div id="dos" class="collapse" data-parent="#accordionExample">
                                <p class="blanco mt-2">
                                    “Le damos forma a tus ideas para crear las mejores soluciones publicitarias” .
                                </p>
                            </div>
                        </div>

                        <div class="my-3">
                            <h3 class="tres font-weight-bold verde" data-toggle="collapse" data-target="#tres">
                                Visión
                            </h3>

                            <div id="tres" class="collapse" data-parent="#accordionExample">
                                <p class="blanco mt-2">
                                    “Ser la compañía de soluciones publicitarias referente del mercado regional”.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- CARRUSEL CON TEXTOS: MISION VISION -->


                <!-- SLIDER DE IMAGENES -->
                <div style="height:330px" id="nuestra_oferta" class="col-6 p-0">

                    <div id="carouselExampleControls" class="h-100 carousel slide" data-ride="carousel">

                        <div class="carousel-inner h-100">

                            <div class="carousel-item h-100 active ">
                                <img src="images/slide_1.png" class="h-100 d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item h-100"> 
                                <img src="images/slide_2.png" class="h-100 d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item h-100"> 
                                <img src="images/slide_3.png" class="h-100 d-block w-100" alt="...">
                            </div>
                            
                        </div>
                        <!-- IMAGENES -->


                        <!-- BOTON IZQUIERDA -->
                        <a class="btn boton_de_oferta_flecha_izquierda" href="#carouselExampleControls" role="button" data-slide="prev">

                            <p class="texto "> <i class="fas fa-angle-left"></i> </p>

                            <div class="w-100 h-100 boton_oferta">

                            </div>

                            <div class="w-100 h-100 hover_oferta"></div>
                        </a>
                        <!-- BOTON IZQUIERDA -->


                        <!-- BOTON DERECHA -->
                        <a class="btn boton_de_oferta_flecha_derecha" href="#carouselExampleControls" role="button" data-slide="next">

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




        </div>

        </div>



    </section>
    <!-- ESCOGERNOS -->

    <!-- VALORES CORPORATIVOS -->
    <section id="valores_corporativos" class="container my-5 d-flex align-items-center">

        <div class="col-6">
            <img src="images/no_image.png" alt="">
        </div>

        <div class="col-6">
            <h2 class="mb-2 text-center font-weight-bold"> VALORES CORPORATIVOS </h2>
            <p> Juntos, hacemos grandes cosas. Los valores corporativos de nuestra
                compañía guían la forma en la que trabajamos en los mercados.
            </p>

            <br>

            <p> El conocimiento basado en la innovación creativa reemplaza la publicidad
                tradicional, aportando perspectivas más profundas bajo la comprensión de este
                enfoque podemos diseñar sistemáticamente mejores soluciones para nuestros
                clientes.
            </p>

            <p class="mt-3 font-weight-bold"> Confianza </p>

            <div class="progress my-2">
                <div class="progress-bar bg_m pgq1 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> Puntualidad (oportunidad) </p>

            <div class="progress my-2">
                <div class="progress-bar bg_m pgq2 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> Liderazgo </p>

            <div class="progress my-2">
                <div class="progress-bar bg_m pgq3 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> Conocimiento </p>

            <div class="progress my-2">
                <div class="progress-bar bg_m pgq4 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> Respeto </p>

            <div class="progress my-2">
                <div class="progress-bar bg_m pgq5 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </div>


    </section>
    <!-- VALORES CORPORATIVOS -->






















    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

    <script src="js/quienes_somos.js"></script>

    <script src="js/barras_de_progreso.js"></script>




</body>

</html>