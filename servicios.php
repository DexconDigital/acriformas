<?php include 'variables/variables.php';

$page = "n";
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
            <img class="h-100 w-100" src="images/Banner_Impresion_Offset.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Quiénes somos </h1>
        </div>

    </section>
    <!-- BANNER -->

    <!-- NUUESTRA OFERTA -->
    <section id="nuestra_oferta" class="container my-5">

    <div class="col-6">
        <h4 class="c mb-2 text-center"> Que hacemos </h4>
        <h2 class="font-weight-bold mb-3 text-center"> NUESTRA OFERTA </h2>
        <p class="text-center"> Creamos soluciones publicitarias y de comunicación integrales </p>

        <a href="#" id="boton_de_oferta"> 
            <p class="texto_oferta position-relative d-inline-block"> Cotiza en línea </p>
            <div class="boton_oferta mt-3 position-absolute w-100 h-100"> </div>
            <div class="hover_oferta position-absolute w-100 h-100"> </div>
        </a>
    </div>

    <div class="col-6">


    </div>

    </section>
    <!-- NUUESTRA OFERTA -->









    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>