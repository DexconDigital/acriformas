<?php include 'variables/variables.php';

$page = "Proyectos";
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
            <h1 class="font-weight-bold"> Proyectos </h1>
        </div>

    </section>
    <!-- BANNER -->


    <!-- PROYECTOS -->
    <section id="proyectos" class="d-flex container mt-5 flex-wrap">

<!-- PROYECTO 1 -->
        <div class="col-4 mb-5 caja">

            <h5 class="text-center mb-2 titulo "> Proyecto de revistas </h5>

            <div class="imagen">
                <img class="w-100 h-100" src="images/proyecto1.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p>
        </div>
<!-- PROYECTO 1 -->


<!-- PROYECTO 2 -->
        <div class="col-4 mb-5 caja">

            <div class="overflow-hidden"><h5 class="text-center mb-2 titulo2 "> Logos para empresas </h5></div>

            <div class="imagen">
                <img class="w-100 h-100" src="images/proyecto2.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p>
        </div>
<!-- PROYECTO 2 -->


<!-- PROYECTO 3 -->
        <div class="col-4 mb-5 caja">

            <h5 class="text-center mb-2 titulo3 "> Publicidad discografica </h5>

            <div class="imagen">
                <img class="w-100 h-100" src="images/proyecto3.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p> </p>
        </div>
<!-- PROYECTO 3 -->


<!-- PROYECTO 4 -->
        <div class="col-4 mb-5 caja">

            <h5 class="text-center mb-2 titulo3 "> Titulo del proyecto </h5>

            <div class="imagen">
                <img class="w-100 h-100" src="images/servicios1.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p>
        </div>
<!-- PROYECTO 4 -->


<!-- PROYECTO 5 -->
        <div class="col-4 mb-5 caja">

           <div class="overflow-hidden"> <h5 class="text-center mb-2 titulo2 "> Titulo del proyecto </h5></div>

            <div class="imagen">
                <img class="w-100 h-100" src="images/servicios2.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p>
        </div>
<!-- PROYECTO 5 -->


<!-- PROYECTO 6 -->
        <div class="col-4 mb-5 caja">

            <h5 class="text-center mb-2 titulo "> Titulo del proyecto </h5>

            <div class="imagen">
                <img class="w-100 h-100" src="images/servicios3.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p></>


        </div>
<!-- PROYECTO 6 -->


<!-- PROYECTO 7 -->
        <div class="col-4 mb-5 caja">

            <h5 class="text-center mb-2 titulo "> Titulo del proyecto </h5>

            <div class="imagen">
                <img class="w-100 h-100" src="images/servicios1.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p>
        </div>
<!-- PROYECTO 7 -->


<!-- PROYECTO 8 -->
        <div class="col-4 mb-5 caja">

            <h5 class="text-center mb-2 titulo "> Titulo del proyecto </h5>

            <div class="imagen">
                <img class="w-100 h-100" src="images/servicios2.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p>
        </div>
<!-- PROYECTO 8 -->


<!-- PROYECTO 9 -->
        <div class="col-4 mb-5 caja">

            <h5 class="text-center mb-2 titulo "> Titulo del proyecto </h5>

            <div class="imagen">
                <img class="w-100 h-100" src="images/servicios3.jpg" alt="">
            </div>

            <p class="mt-2 text-justify parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sint aliquid cupiditate esse in optio sed maxime illum debitis quo. </p></>


        </div>
<!-- PROYECTO 9 -->

    </section>
    <!-- PROYECTOS -->







    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>