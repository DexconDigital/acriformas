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

                <button id="boton1" class="button1 rounded col-12 my-2" data-toggle="collapse" data-target="#p1" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <!-- <i class="fas fa-window-minimize"></i> -->
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #1 </p>
                    </div>

                </button>

                <div id="p1" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #1*
                    </div>
                </div>

                
                <button id="boton2" class="button2 rounded col-12 mb-2" data-toggle="collapse" data-target="#p2" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #2 </p>
                    </div>

                </button>

                <div id="p2" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #2*
                    </div>
                </div>


                <button id="boton3" class="button3 col-12 mb-2" data-toggle="collapse" data-target="#p3" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #3 </p>
                    </div>

                </button>

                <div id="p3" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #3*
                    </div>
                </div>


            </div>
            <!-- ACORDEON CON PREGUNTAS -->
        </div>
        <!-- SECCION DE PREGUNTAS -->

    </section>
    <!-- SECCION FAQ -->



















    <?php include 'layout/archivos_footer.php' ?>


    <script>
       
       boton1 = document.getElementById('');

    </script>

</body>


</html>