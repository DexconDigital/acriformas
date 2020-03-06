<?php include 'variables/variables.php';

$page = "Impresión Digital";
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
            <img class="h-100 w-100" src="images/Banner_Impresion_Offset.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Impresión Digital </h1>
        </div>

    </section>
    <!-- BANNER -->




    <section id="s_digital" class="my-5">

        <div class="d-flex col-6 py-5 m-auto align-items-center justify-content-center flex-column">

            <div class="caja_icono p-4 position-relative">

                <div class="caja_fondo1 caja_fondo"> </div>

                <img class="position-relative" src="images/impresora.png" alt="">

            </div>


            <h4 class="mt-3 titulo font-weight-bold"> Impresión Digital </h4>

            <p class="parrafo mt-2 text-justify"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quae nemo, tempora earum atque, ratione eius omnis modi illo, dicta natus accusantium recusandae eos sint laboriosam fugit. Vitae dolorum distinctio minima deserunt temporibus eius commodi molestias exercitationem at, rem deleniti id odio ab iusto porro tempora, fuga, aliquam amet culpa. </p>


        </div>


    </section>










    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>