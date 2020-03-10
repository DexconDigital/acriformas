<?php include 'variables/variables.php';

$page = "Noticias";
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
            <h1 class="font-weight-bold"> Noticias </h1>
        </div>

    </section>
    <!-- BANNER -->

    <!-- CARDS DE NOTICIAS -->
    <section id="noticias" class="my-5 container d-flex align-items-center justify-content-center flex-wrap">

        <!-- NOTICIA 1 -->
        <div class="col-4 mb-5">

            <div class="tarjeta">

                <div class="imagen">
                    <img class="w-100 h-100" src="images/proyecto1.jpg" alt="">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center text-justify">
                    <h5 class="titulo mt-2"> Título de Noticia </h4>
                    <p class="texto mt-2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat modi repellat veniam quasi iusto voluptatibus officiis quam! Atque eius blanditiis itaque consectetur a quos mollitia minus tempora aliquam? At, facere. </p>
                </div>




            </div>

        </div>
        <!-- NOTICIA 1 -->

        <!-- NOTICIA 2 -->
        <div class="col-4 mb-5">

            <div class="tarjeta">

                <div class="imagen">
                    <img class="w-100 h-100" src="images/proyecto2.jpg" alt="">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center text-justify">
                    <h5 class="titulo mt-2"> Título de Noticia </h4>
                    <p class="texto mt-2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat modi repellat veniam quasi iusto voluptatibus officiis quam! Atque eius blanditiis itaque consectetur a quos mollitia minus tempora aliquam? At, facere. </p>
                </div>




            </div>

        </div>
        <!-- NOTICIA 2 -->

        <!-- NOTICIA 3 -->
        <div class="col-4 mb-5">

            <div class="tarjeta">

                <div class="imagen">
                    <img class="w-100 h-100" src="images/proyecto3.jpg" alt="">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center text-justify">
                    <h5 class="titulo mt-2"> Título de Noticia </h4>
                    <p class="texto mt-2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat modi repellat veniam quasi iusto voluptatibus officiis quam! Atque eius blanditiis itaque consectetur a quos mollitia minus tempora aliquam? At, facere. </p>
                </div>




            </div>

        </div>
        <!-- NOTICIA 3 -->


        <!-- NOTICIA 4 -->
        <div class="col-4 mb-5">

            <div class="tarjeta">

                <div class="imagen">
                    <img class="w-100 h-100" src="images/proyecto3.jpg" alt="">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center text-justify">
                    <h5 class="titulo mt-2"> Título de Noticia </h4>
                    <p class="texto mt-2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat modi repellat veniam quasi iusto voluptatibus officiis quam! Atque eius blanditiis itaque consectetur a quos mollitia minus tempora aliquam? At, facere. </p>
                </div>




            </div>

        </div>
        <!-- NOTICIA 4 -->

        <!-- NOTICIA 5 -->
        <div class="col-4 mb-5">

            <div class="tarjeta">

                <div class="imagen">
                    <img class="w-100 h-100" src="images/proyecto1.jpg" alt="">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center text-justify">
                    <h5 class="titulo mt-2"> Título de Noticia </h4>
                    <p class="texto mt-2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat modi repellat veniam quasi iusto voluptatibus officiis quam! Atque eius blanditiis itaque consectetur a quos mollitia minus tempora aliquam? At, facere. </p>
                </div>




            </div>

        </div>
        <!-- NOTICIA 5 -->

        <!-- NOTICIA 6 -->
        <div class="col-4 mb-5">

            <div class="tarjeta">

                <div class="imagen">
                    <img class="w-100 h-100" src="images/proyecto2.jpg" alt="">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center text-justify">
                    <h5 class="titulo mt-2"> Título de Noticia </h5>
                    <p class="texto mt-2"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat modi repellat veniam quasi iusto voluptatibus officiis quam! Atque eius blanditiis itaque consectetur a quos mollitia minus tempora aliquam? At, facere. </p>
                </div>




            </div>

        </div>
        <!-- NOTICIA 6 -->



    </section>
    <!-- CARDS DE NOTICIAS -->









    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>