<?php include 'variables/variables.php';

$page = "Bienestar y eventos empresariales";
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
            <img class="h-100 w-100" src="images/banner_bienestar.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Bienestar y eventos empresariales </h1>
        </div>

    </section>
    <!-- BANNER -->

    <section id="servicios_detalle" class="d-flex flex-wrap container my-5">


        <div class="col-3 pt-5 border-top">

            <h2 class="mb-3"> SERVICIOS </h2>

            <div> > <a class="<?php if ($page == 'Impresión Digital') {
                                    echo 'activo';
                                } ?> font-weight-bold" href="s_digital.php">Impresión Digital </a> </div>
            <div> > <a class="<?php if ($page == 'Impresión offset') {
                                    echo 'activo';
                                } ?> font-weight-bold" href="s_offset.php">Impresión Offset </a> </div>
            <div> > <a class="<?php if ($page == 'Señalización Industrial') {
                                    echo 'activo';
                                } ?> font-weight-bold" href="s_industrial.php">Señalización Industrial </a> </div>
            <div> > <a class="<?php if ($page == 'Bienestar y eventos empresariales') {
                                    echo 'activo';
                                } ?> font-weight-bold" href="s_bienestar.php">Bienestar y eventos empresariales </a> </div>
            <div> > <a class="<?php if ($page == 'Ferias y eventos') {
                                    echo 'activo';
                                } ?> font-weight-bold" href="s_eventos.php">Ferias y eventos </a> </div>
            <div> > <a class="<?php if ($page == 'Merchandising') {
                                    echo 'activo';
                                } ?> font-weight-bold" href="s_merchandising.php">Merchandising </a> </div>

        </div>


        <div class="col-9">

            <div class="col-12 d-flex align-items-center justify-content-center mb-5">
                <img src="images/no_image.png" alt="">
            </div>

            <h2 class="text-center font-weight-bold mb-3"> Bienestar y eventos empresariales </h2>

            <p class="text-justify mb-3"> Contamos con la mejor opción para sorprender a sus empleados con obsequios,
                diseños e imagen corporativa o el concepto publicitario que quiera manejar.
                Nuestro equipo está preparado para organizar y realizar eventos para su
                compañía.
            </p>

            <ul>
                <li> Cristales</li>
                <li> Piedras</li>
                <li> Mugs</li>
                <li> Eventos de fin de año</li>
                <li> Fiestas empresariales</li>
                <li> Eventos temáticos (navidad, Halloween)</li>
                <li> Protocolo y etiqueta</li>
                <li> Desayuno de trabajo</li>
                <li> Lanzamientos</li>
                <li> Buffets</li>
            </ul>


        </div>




    </section>








    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>