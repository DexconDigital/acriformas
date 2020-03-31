<?php include 'variables/variables.php';

$page = "Señalización Industrial";
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
            <img class="h-100 w-100" src="images/banner_señalizacion.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Señalización Industrial </h1>
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

            <h2 class="text-center font-weight-bold mb-3"> Señalización Industrial </h2>


            <p class="text-justify mb-3"> Las señales de seguridad están diseñadas con base en los colores de seguridad
                y contraste, Manejamos señalización en diferentes materiales: Poliestireno,
                acrílico, vidrio, Brush, lámina galvanizada, acero y MDF. Considerando las
                formas geométricas establecidas en las normas:
            </p>

            <div style="max-height:40vh; overflow:scroll">

                <ul>
                    <li> NTC 1461 Higiene y Seguridad</li>
                    <li> NTC 1931 Protección Contra Incendios</li>
                    <li> ISO 3864-1 Principios de Diseño de Señales de Seguridad</li>
                    <li> ISO 16069 Sistemas de señalización de rutas de evacuación</li>
                    <li> ANZI Z535 Señales y colores de seguridad</li>

                </ul>

                <p class="mb-3 ">Tipos de señalización:</p>

                <ul>

                    <li> Señales en poliestireno</li>
                    <li> Señales en acrílico</li>
                    <li> Señales tipo sandwich</li>
                    <li> Señales en vidrio</li>
                    <li> Señales tipo pedestal</li>
                    <li> Señales Fotoluminiscentes</li>
                    <li> Señalización marcación de tubería</li>
                    <li> Señales temporales de Piso</li>
                    <li> Señalización de Parqueaderos</li>
                    <li> Señales para Construcción</li>
                    <li> Rótulos de Productos químicos</li>
                    <li> Marquillas en Acero</li>
                    <li> Marquillas Imantadas</li>
                    <li> Planos de evacuación</li>
                    <li> Bandas Antideslizantes</li>
                    <li> Reglamentos</li>
                    <li> Señales Bilingües</li>
                    <li> Tableros Informativos</li>
                    <li> Tableros Imantados</li>
                    <li> Carteleras Informativas</li>
                    <li> Bolsillos en acrílico</li>

                </ul>

            </div>

        </div>




    </section>








    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>