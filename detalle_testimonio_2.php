<?php include 'variables/variables.php';

$page = "Detalle de Testimonio";
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
            <img class="h-100 w-100" src="images/banner_quienes_somos.png" alt="">
        </div>

        <div class="fondo_negro position-absolute w-100 h-100"> </div>

        <div class="position-relative d-flex align-items-center justify-content-center w-100 h-100 blanco">
            <h1 class="font-weight-bold"> Detalle de Testimonio 2 </h1>
        </div>

    </section>
    <!-- BANNER -->

    <!-- DESCRIPCIÓN DE TESTIMONIO -->
    <section class="container mt-5 d-flex flex-wrap">

        <div class="col-9">
            <h2 class="mb-3 font-weight-bold"> Titulo de Testimonio </h2>

            <p class="text-justify"> <span class="font-weight-bold">*Descripción de Testimonio*</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ipsam. Delectus quae eius quidem reiciendis omnis perferendis consectetur! Adipisci eos veritatis explicabo obcaecati doloremque magnam? Cum tenetur officia ut? Saepe repellendus perspiciatis sed labore dolores totam a consectetur! Fuga adipisci voluptate dolore quasi similique nihil porro, possimus, aut laborum, eveniet repellat maxime rerum esse unde! Sit numquam libero soluta, asperiores, ipsum quam animi cumque magni amet veritatis, dolorum vero fugiat? Velit aliquam eveniet odio ipsa nulla facilis voluptatem culpa a repellendus. Tempore dolorum omnis corrupti tempora sequi voluptatem quidem in eveniet reprehenderit sit. Optio a laborum aspernatur ipsam, excepturi et eligendi consequatur provident omnis voluptates at dolor accusamus minus tenetur nihil nam officia vel vero harum mollitia unde. Optio hic repudiandae accusamus placeat? Molestias numquam neque ipsum nisi mollitia rerum quos ullam alias tempora. Voluptatem earum similique inventore voluptatibus illo rem harum ipsum nobis, error ad delectus unde minima aliquam optio nam eius ratione dicta fuga possimus eligendi dolorem? Est natus facilis nostrum harum eum impedit ullam nemo! Mollitia id impedit fugiat rem harum quis dolorum facere sunt consequatur blanditiis at odit possimus esse doloremque amet, autem vitae excepturi. Ipsam excepturi eos, doloribus numquam reiciendis ut iste perspiciatis eveniet ad! </p>
        </div>

        <div class="col-3">

            <h2 class="mb-3"> Categorias </h2>

            <ul>
                <li> <a href="#">categoria1</a> </li>
                <li> <a href="#">categoria2</a> </li>
                <li> <a href="#">categoria3</a> </li>
                <li> <a href="#">categoria4</a> </li>
            </ul>

        </div>

    </section>
    <!-- DESCRIPCIÓN DE TESTIMONIO -->


    <!-- NUUESTRA OFERTA -->
    <section id="nuestra_oferta" class=" py-5">


        <div class="d-flex container">
            <!-- SLIDER DE IMAGENES -->
            <div class="col-12">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/servicios1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/servicios2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/servicios3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- IMAGENES -->



                    <!-- BOTON IZQUIERDA -->
                    <a class="btn boton_de_oferta_flecha_izquierda mt-3" href="#carouselExampleControls" role="button" data-slide="prev">

                        <p class="texto "> <i class="fas fa-angle-left"></i> </p>

                        <div class="w-100 h-100 boton_oferta">

                        </div>

                        <div class="w-100 h-100 hover_oferta"></div>
                    </a>
                    <!-- BOTON IZQUIERDA -->


                    <!-- BOTON DERECHA -->
                    <a class="btn boton_de_oferta_flecha_derecha mt-3" href="#carouselExampleControls" role="button" data-slide="next">

                        <p class="texto "> <i class="fas fa-angle-right"></i> </p>

                        <div class="w-100 h-100 boton_oferta">

                        </div>

                        <div class="w-100 h-100 hover_oferta"></div>
                    </a>
                    <!-- BOTON DERECHA -->


                </div>

            </div>
            <!-- SLIDER DE IMAGENES -->

        </div>

    </section>
    <!-- NUUESTRA OFERTA -->






    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->

    <?php include 'layout/archivos_footer.php' ?>

</body>

</html>