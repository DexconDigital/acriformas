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
    <style>
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #666;
  color: white;
}
</style>
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
            <img class="h-100 w-100" src="images/Banner_Impresion_Offset.png" alt="">
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
    <section id="escogernos" class="mt-5">

        <div class="container">

            <h4 class="y text-center pt-5 pb-3"> ACRIFORMAS PUBLICIDAD </h4>

            <h2 class="blanco font-weight-bold text-center mb-5"> ¿POR QUÉ ESCOGERNOS? </h2>

            <div class="d-flex contenido align-items-center">



                <!-- CARRUSEL CON TEXTOS: MISION VISION -->
                <div class="col-6 h-100">
                    <div class="accordion" id="accordionExample">

                        <div class="my-3">
                            <h3 class="bot font-weight-bold activo blanco" data-toggle="collapse" data-target="#uno">
                                Promesa de Valor
                            </h3>

                            <div id="uno" class="collapse show" data-parent="#accordionExample">
                                <p class="blanco">
                                    *Contenido promesa de valor*
                                </p>
                            </div>
                        </div>

                        <div class="my-3">
                            <h3 class="bot font-weight-bold blanco" data-toggle="collapse" data-target="#dos">
                                Misión
                            </h3>

                            <div id="dos" class="collapse" data-parent="#accordionExample">
                                <p class="blanco">
                                    *Contenido promesa de Visión*
                                </p>
                            </div>
                        </div>

                        <div class="my-3">
                            <h3 class="bot font-weight-bold blanco" data-toggle="collapse" data-target="#tres">
                                Visión
                            </h3>

                            <div id="tres" class="collapse" data-parent="#accordionExample">
                                <p class="blanco">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- CARRUSEL CON TEXTOS: MISION VISION -->


                <!-- IMAGEN -->
                <div class="col-6 h-75">
                    <img class="w-100 h-100" src="images/banner.png" alt="">
                </div>
                <!-- IMAGEN -->

            </div>




        </div>

        </div>



    </section>
    <!-- ESCOGERNOS -->















    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>