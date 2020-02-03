<?php include 'variables/variables.php';

$page = "Inicio";
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



    <style>
        .activobtn {
            background-color: red !important;
        }
    </style>

</head>

<body>


    <!-- SECCION FAQ -->
    <section id="seccion_faq" class="container d-flex mt-5">

        <!-- NUESTRAS CAPACIDADES -->
        <div class="col-6">

            <h2 class="font-weight-bold text-center mb-3"> Nuestras capacidades </h2>
            <p> Nuestras capacidades están estructuradas para apoyar a las compañías a enfrentar el futuro. </p>
            <br />
            <p> Encontramos nuevos propósitos, para ser más relevantes y aprovechar las oportunidades para impulsar el crecimiento de nuestros clientes de maneras sin precedentes, con las herramientas publicitarias y creativas que rompen los esquemas tradicionales del mercado actual. </p>

            <p class="mt-3 font-weight-bold"> IMPRESION DIGITAL </p>

            <div class="progress my-2">
                <div class="progress-bar bg_c" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> IMPRESION OFFSET </p>

            <div class="progress my-2">
                <div class="progress-bar bg_c" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> IMPRESION MERCHANDISING </p>

            <div class="progress my-2">
                <div class="progress-bar bg_c" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> FERIAS Y EVENTOS </p>

            <div class="progress my-2">
                <div class="progress-bar bg_c" role="progressbar" style="width: 79%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </div>
        <!-- NUESTRAS CAPACIDADES -->


        <!-- SECCION DE PREGUNTAS -->
        <div class="col-6">

            <h2 class="font-weight-bold text-center"> FAQ </h2>

            <!-- ACORDEON CON PREGUNTAS -->
            <div class="accordion" id="accordionExample">

                <button id="botonnn" class="button1 rounded col-12 my-2" data-toggle="collapse" data-target="#boton11" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <!-- <i class="fas fa-window-minimize"></i> -->
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #1 </p>
                    </div>

                </button>

                <div id="boton11" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #1*
                    </div>
                </div>

                
                <button class="button2 rounded col-12 mb-2" data-toggle="collapse" data-target="#boton22" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #2 </p>
                    </div>

                </button>

                <div id="boton22" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #2*
                    </div>
                </div>


                <button class="button3 col-12 mb-2" data-toggle="collapse" data-target="#boton33" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #3 </p>
                    </div>

                </button>

                <div id="boton33" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #3*
                    </div>
                </div>


            </div>
            <!-- ACORDEON CON PREGUNTAS -->


            <!-- BOTON -->
            <div class="container-fluid d-flex align-items-center justify-content-center mt-3">
                <a href="#" class="btn boton blanco">
                    <p class="contenido_boton"> Ver todas las preguntas </p>
                    <div class="c1"></div>
                    <div class="c2"></div>
                    <div class="c3"></div>
                </a>
            </div>
            <!-- BOTON -->

        </div>
        <!-- SECCION DE PREGUNTAS -->

    </section>
    <!-- SECCION FAQ -->



















    <?php include 'layout/archivos_footer.php' ?>


    <script>
        $(document).ready(function() {


            $("#accordionExample").on("click", ".button1", function() {


                if ($("#boton11").className == "collapse show") {

                    $(".button1").addClass("activobtn");

                } else {
                    $(".button1").removeClass("activobtn");
                }

            });


        });

    </script>

</body>


</html>