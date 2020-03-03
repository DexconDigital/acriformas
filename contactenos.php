<?php include 'variables/variables.php';

$page = "Contáctenos";
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
            <h1 class="font-weight-bold"> Contáctenos </h1>
        </div>

    </section>
    <!-- BANNER -->

    <!-- FORMULARIO DE CONTACTO -->
    <section id="formulario_contacto" class="my-5 d-flex container align-items-center">

        <!-- DIRECCION TELEFONOS Y CORREO -->
        <div class="direccion_y_telefonos h-100 col-6 d-flex flex-column align-items-center justify-content-center bg_c">

            <h2 class="font-weight-bold mb-3 blanco f50"> Nuestros Contactos </h2>

            <!-- NUESTRAS OFICINAS -->
            <div class="d-flex align-items-center jutify-content-center mb-3">

                <div class="mr-3">
                    <i class="blanco icono fas fa-map-marker-alt"> </i>
                </div>

                <div>
                    <p class="font-weight-bold"> NUESTRAS OFICINAS </p>
                    <p> Carrera 12.No. 11-88 Funza C/marca </p>
                </div>

            </div>
            <!-- NUESTRAS OFICINAS -->

            <!-- TELEFONOS -->
            <div class="telefonos d-flex align-items-center jutify-content-center mb-3">

                <div class="mr-3">
                    <i class="blanco icono fas fa-phone"> </i>
                </div>

                <div>

                    <p class="font-weight-bold"> TELEFONOS </p>
                    <a href="tel: +031 825 8813" class="d-flex align-items-center">
                        <i class="mr-2 iconos blanco fas fa-phone-alt"></i>
                        <p> 825 8813 </p>
                    </a>

                    <a href="tel: 3105572107" class="d-flex align-items-center">
                        <i class="mr-2 iconos blanco fas fa-mobile-alt"></i>
                        <p> 3105572107 </p>
                    </a>

                    <a href="tel: 3112291714" class="d-flex align-items-center">
                        <i class="mr-2 iconos blanco fas fa-mobile-alt"></i>
                        <p> 3112291714 </p>
                    </a>

                    <a target="blank" href="https://api.whatsapp.com/send?phone=573168931715&text=&source=&data=" class="d-flex align-items-center">
                        <i class="mr-2 iconos blanco fab fa-whatsapp"></i>
                        <p> 3168931715 </p>
                    </a>

                </div>

            </div>
            <!-- TELEFONOS -->

            <!-- CORREOS -->
            <div class="d-flex align-items-center jutify-content-center mb-3">

                <div class="mr-3">
                    <i class="blanco icono fas fa-envelope"> </i>
                </div>

                <div>
                    <p class="font-weight-bold"> CORREO ELECTRONICO </p>
                    <a href="mailto:servicioalcliente@acriformas.com"> servicioalcliente@acriformas.com </a>
                </div>

            </div>
            <!-- CORREOS -->


        </div>
        <!-- DIRECCION TELEFONOS Y CORREO -->

        <!-- FORMULARIO -->
        <form class="formulario h-100 col-6 d-flex aling-items-center justify-content-center flex-column">

            <h2 class="font-weight-bold text-center mb-3"> FORMULARIO DE CONTACTO </h2>

            <input class="form-control my-2" type="text" placeholder="Tu Nombre">
            <input class="form-control my-2" type="mail" placeholder="Tu E-mail">
            <input class="form-control my-2" type="text" placeholder="En que estas interesado?">
            <div class="form-group mt-2">
                <textarea class="form-control" placeholder="Tu Mensaje"></textarea>
            </div>

            <div class="custom-control custom-checkbox mb-4">
                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_a_contacto" href="archivos/politica.pdf" target="blank"> política de tratamiento de datos personales.</a></label>
            </div>

        </form>
        <!-- FORMULARIO -->

    </section>
    <!-- FORMULARIO DE CONTACTO -->








    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>