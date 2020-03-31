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
            <img class="h-100 w-100" src="images/banner_impresion_digital.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Impresión Digital </h1>
        </div>

    </section>
    <!-- BANNER -->




    <!-- <section id="s_digital" class="my-5">

        <div class="d-flex col-6 py-5 m-auto align-items-center justify-content-center flex-column">

            <div class="caja_icono p-4 position-relative">

                <div class="caja_fondo1 caja_fondo"> </div>

                <img class="position-relative" src="images/impresora.png" alt="">

            </div>


            <h4 class="mt-3 titulo font-weight-bold"> Impresión Digital </h4>

            <p class="parrafo mt-2 text-justify"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quae nemo, tempora earum atque, ratione eius omnis modi illo, dicta natus accusantium recusandae eos sint laboriosam fugit. Vitae dolorum distinctio minima deserunt temporibus eius commodi molestias exercitationem at, rem deleniti id odio ab iusto porro tempora, fuga, aliquam amet culpa. </p>


        </div>


    </section> -->


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

            <h2 class="text-center font-weight-bold mb-3"> Impresión Digital </h2>


            <p class="text-justify mb-3"> Trabajamos sobre sustratos como vinilo, banner, back-lite, panaflex, foam board, papel forografáfico, manteriales que nos permiten elaborar piezas como:

            </p>

            <ul style="max-height: 40vh; overflow:scroll;">
                <li>Tropezones</li>
                <li>Pendones, vallas</li>
                <li>Branding vehicular</li>
                <li>Brandeo de vidrios</li>
                <li>Impresión gigantografía</li>
                <li>Decoración de puntos de venta</li>
                <li>Retablos</li>
                <li>Bastidores</li>
                <li>Cajas de luz</li>
                <li>Floor graphic</li>
                <li>Buzones</li>
                <li>Marchos habatibles</li>
                <li>Porta pendones</li>
                <ul>
                    <li>Sky-line</li>
                    <li>Estructuras de exhibición</li>
                    <li>Diseño y producción de stand</li>
                    <li>Volumetricos</li>
                    <li>Pasamensajes</li>
                    <li>Portapendones</li>
                    <li>Araña</li>
                    <li>Doble araña</li>
                    <li>Trípode</li>
                    <li>Porta man</li>
                    <li>Backing</li>
                    <li>Retractil</li>
                    <li>Retractil de lujo</li>
                    <li>Bigger</li>
                    <li>Roll up</li>
                </ul>
                <li>Sistemas de exhibición</li>
                <ul>
                    <li>Pop up recto</li>
                    <li>Pop up curvo</li>
                    <li>Counter de lujo</li>
                    <li>Counter pop up</li>
                    <li>Counter plástico</li>
                </ul>
            </ul>








    </section>




    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>