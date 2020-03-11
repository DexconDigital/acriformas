<?php include 'variables/variables.php';

$page = "FAQ";
$nombre_inmobiliaria = "Acriformas";
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
            <img class="h-100 w-100" src="images/banner_faq.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> FAQ </h1>
        </div>

    </section>
    <!-- BANNER -->

    <!-- SECCION FAQ -->

    <h2 class="font-weight-bold text-center mt-5"> Sección de preguntas y respuestas </h2>

    <section id="seccion_faq" class="container d-flex my-5">


        <div class="col-6">

            <!-- ACORDEON CON PREGUNTAS -->
            <div class="accordion" id="accordionExample">


                <!-- BOTON 1 -->
                <button id="boton1" class="rounded col-12 my-2" data-toggle="collapse" data-target="#p1" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <!-- <i class="fas fa-window-minimize"></i> -->
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono1" class="c fas fa-plus"></i></div>
                        <p> Quiero ponerme en contacto con el departamento de Atención al cliente ¿como lo hago? </p>
                    </div>

                </button>

                <div id="p1" class="collapse">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla aliquam ut nobis dolorem quisquam harum optio consectetur sint, quas aspernatur!
                    </div>
                </div>
                <!-- BOTON 1 -->




                <!-- BOTON 2 -->
                <button id="boton2" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p2" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono2" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #2 </p>
                    </div>

                </button>

                <div id="p2" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #2*
                    </div>
                </div>
                <!-- BOTON 2 -->




                <!-- BOTON 3 -->
                <button id="boton3" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p3" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono3" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #3 </p>
                    </div>

                </button>

                <div id="p3" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #3*
                    </div>
                </div>
                <!-- BOTON 3 -->




                <!-- BOTON 4 -->
                <button id="boton4" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p4" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono4" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #6 </p>
                    </div>

                </button>

                <div id="p4" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #6*
                    </div>
                </div>
                <!-- BOTON 4 -->





                <!-- BOTON 5 -->
                <button id="boton5" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p5" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono5" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #5 </p>
                    </div>

                </button>

                <div id="p5" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #5*
                    </div>
                </div>
                <!-- BOTON 5 -->


            </div>
            <!-- ACORDEON CON PREGUNTAS -->

        </div>

        <div class="col-6">

            <!-- ACORDEON CON PREGUNTAS -->
            <div class="accordion" id="accordionExample">



                <!-- BOTON 6 -->
                <button id="boton6" class="rounded col-12 my-2" data-toggle="collapse" data-target="#p6" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <!-- <i class="fas fa-window-minimize"></i> -->
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono6" class="c fas fa-plus"></i></div>
                        <p> ¿Es necesario registrarme para comprar? </p>
                    </div>

                </button>

                <div id="p6" class="collapse">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab dicta assumenda, eius maiores, suscipit quos delectus nulla, sed magnam officiis repellat iure similique! Ea culpa nulla ab quae voluptatem.
                    </div>
                </div>
                <!-- BOTON 6 -->




                <!-- BOTON 7 -->
                <button id="boton7" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p7" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono7" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #7 </p>
                    </div>

                </button>

                <div id="p7" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #7*
                    </div>
                </div>
                <!-- BOTON 7 -->





                <!-- BOTON 8 -->
                <button id="boton8" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p8" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono8" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #8 </p>
                    </div>

                </button>

                <div id="p8" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #8*
                    </div>
                </div>
                <!-- BOTON 8 -->




                <!-- BOTON 9 -->
                <button id="boton9" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p9" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono9" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #9 </p>
                    </div>

                </button>

                <div id="p9" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #9*
                    </div>
                </div>
                <!-- BOTON 9 -->



                <!-- BOTON 10 -->
                <button id="boton10" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p10" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono10" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #10 </p>
                    </div>

                </button>

                <div id="p10" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #10*
                    </div>
                </div>
                <!-- BOTON 10 -->



            </div>
            <!-- ACORDEON CON PREGUNTAS -->


        </div>


    </section>
    <!-- SECCION FAQ -->









    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

    <script src="js/botones_faq.js"></script>

</body>

</html>