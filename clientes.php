<?php include 'variables/variables.php';

$page = "Clientes";
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
            <h1 class="font-weight-bold"> Clientes </h1>
        </div>

    </section>
    <!-- BANNER -->



    <section>

        <h2 class="font-weight-bold my-5 text-center"> Solicite su cotización en línea </h2>

        <div class="container d-flex flex-wrap">

            <div class="col-6 d-flex justify-content-center align-items-center flex-column">

                <div>
                    <img class="w-100 h-100" src="images/pedido_en_linea.png" alt="">
                </div>



            </div>


            <!-- FORMULARIO -->
            <form id="formulario_clientes" class="col-6 d-flex my-5 justify-content-center align-items-center flex-wrap">

                <div class="my-3 col-12">
                    <input type="text" class="border form-control" id="" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" required>
                </div>

                <div class="mb-3 col-12">
                    <input type="number" class="border form-control" name="telefono" aria-describedby="emailHelp" placeholder="Teléfono" required>
                </div>

                <div class="mb-3 align-items-center d-flex col-12">
                    <input type="text" class="border form-control" name="correo" aria-describedby="emailHelp" placeholder="Correo electrónico" required>
                </div>

                <div class="mb-3 col-12 form-group d-flex align-items-start">
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea class="form-control" name="mensaje" placeholder="Tu Solicitud" rows="3"></textarea>
                </div>

                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                    <label class="custom-control-label" for="defaultContactFormCopy">Confirmo que he leído, entendido y acepto la<a class="color_a_contacto" href="archivos/politica.pdf" target="blank"> política de tratamiento de datos personales.</a></label>
                </div>

                <a href="#" class="position-relative btn boton blanco mt-1">
                    <p class="contenido_boton"> Pague en línea </p>
                    <div class="c1"></div>
                    <div class="c2"></div>
                    <div class="c3"></div>
                </a>



            </form>
            <!-- FORMULARIO -->

        </div>



        </div>

    </section>








    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>