<?php include 'variables/variables.php';
$page = "Inicio";

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

    <!-- IMAGENES PRINCIPALES -->
    <section id="imagenes_principales" class="margen_top">

        <div class="imagen">
            <img src="images/publicidad.jpg" alt="">
        </div>

    </section>
    <!-- IMAGENES PRINCIPALES -->

    <!-- SERVICIOS -->
    <section id="servicios">

        <div class="d-flex">

            <div class="izquierda d-flex align-items-start justify-content-center flex-column col-3">
                <h2 class="mb-3 font-weight-bold"> Servicios </h2>
                <p> Tanto en nuestras oficinas como en línea, puedes encontrar las más completa soluciones en comunicación gráfica integral. </p>
            </div>

            <div class="derecha p-0 col-9 d-flex flex-wrap">

                <a href="#" class="p-0 m-auto py-5 icono icono1 col-2">
                    <img src="images/impresora.png" alt="">
                    <p class="text-center mt-2"> Impresión digital </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono2 col-2">
                    <img src="images/impresora_g.png" alt="">
                    <p class="text-center mt-2"> Impresión offset </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono3 col-2">
                    <img src="images/folleto.png" alt="">
                    <p class="text-center mt-2"> Señalización industrial </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono4 col-2">
                    <img src="images/circulo.png" alt="">
                    <p class="text-center mt-2"> Bienestar y eventos empresariales </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono5 col-2">
                    <img src="images/papel.png" alt="">
                    <p class="text-center mt-2"> Ferias y eventos </p>
                </a>

                <a href="#" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono6 col-2">
                    <img src="images/camisa.png" alt="">
                    <p class="text-center mt-2"> Merchandising</p>
                </a>

            </div>

        </div>

    </section>
    <!-- SERVICIOS -->

    <!-- SECCION ALIADOS  -->
    <section id="logos">
        <div class="d-flex m-auto h-100 align-items-center justify-content-center container">

            <div class="col-2">
                <img src="images/logo1.webp" alt="">
            </div>

            <div class="col-2">
                <img src="images/logo2.webp" alt="">
            </div>

            <div class="col-2">
                <img src="images/logo3.webp" alt="">
            </div>

            <div class="col-2">
                <img src="images/logo4.webp" alt="">
            </div>

            <div class="col-2">
                <img src="images/logo5.webp" alt="">
            </div>

            <div class="col-2">
                <img src="images/logo6.webp" alt="">
            </div>

        </div>
    </section>
    <!-- SECCION ALIADOS  -->

    <!-- SECCION1 -->
    <section id="seccion1" class="d-flex aling-items-center justify-content-center container mt-5">

        <div class="col-7">

            <h4 class="m"> Bienvenido a: </h4>
            <h2 class="mt-3 font-weight-bold"> ACRIFORMAS PUBLICIDAD S.A.S. DIGITAL & MERCHANDISING </h2>
            <p class="mt-2 text-justify"> Somos un aliado estratégico para nuestros clientes en el desarrollo de la
                comunicación gráfica de forma integral, a través de un talento humano
                competente y comprometido, generando los resultados y beneficios esperados
                mediante ideas creativas e innovadoras, eco-amigables con un enfoque de
                responsabilidad social empresarial.
            </p>

            <!-- BOTON -->
            <a href="#" class="position-relative btn boton blanco mt-3">
                <p class="contenido_boton"> Descubre más </p>
                <div class="c1"></div>
                <div class="c2"></div>
                <div class="c3"></div>
            </a>
            <!-- BOTON -->


        </div>

        <div class="col-5 p-0 d-flex justify-content-center">
            <img src="images/lupa_colores.jpg" alt="">
        </div>

    </section>
    <!-- SECCION1 -->

    <!-- SECCION VIDEO -->
    <section id="seccion_video" class="position-relative mt-5">

        <div class="d-flex">

            <div class="imagen position-absolute">
                <img src="images/imagen_video.jpg" alt="">
            </div>

            <div class="atenuar_imagen position-absolute">
            </div>

            <div class="contenido position-absolute d-flex align-items-center justify-content-center flex-column w-100 h-100">

                <h4 class="y"> Le damos forma a tus ideas </h4>
                <h2 class="w-75 font-weight-bold blanco mt-3 text-uppercase"> Experiencia en soluciones de impresión, digital y merchandising por más de 13 años. </h2>

                <!-- BOTON VIDEO -->
                <a href="#" class="mt-5 boton_video d-flex position-relative align-items-center justify-content-center">
                    <i class="icono far fa-play-circle"></i>
                    <div class="boton_video2 position-absolute"> </div>
                    <div class="boton_video3 position-absolute"> </div>
                </a>
                <!-- BOTON VIDEO -->

            </div>

        </div>

    </section>
    <!-- SECCION VIDEO -->

    <!-- SECCION TESTIMONIOS -->
    <section id="seccion_testimonios" class="mt-5">

        <div class="d-flex container">

            <!-- CARDS CON ICONOS -->
            <div class="caja_cards rounded col-6 d-flex flex-wrap align-items-center justify-content-center">

                <a href="#" class="col-5 rounded cards0 d-flex align-items-center flex-column justify-content-center mx-3 my-3">
                    <div class="icono"> <img src="images/logo dexcon digital_blanco.png" alt=""> </div>
                </a>

                <a href="#" class="col-5 rounded cards0 d-flex align-items-center flex-column justify-content-center mx-3 my-3">
                    <div class="icono"> <img src="images/logo1.webp" alt=""> </div>
                </a>

                <a href="#" class="col-5 rounded cards0 d-flex align-items-center flex-column justify-content-center mx-3 mb-3">
                    <div class="icono"> <img src="images/logo1.webp" alt=""> </div>
                </a>

                <a href="#" class="col-5 rounded cards0 d-flex align-items-center flex-column justify-content-center mx-3 mb-3">
                    <div class="icono"> <img src="images/logo1.webp" alt=""> </div>
                </a>

            </div>
            <!-- CARDS CON ICONOS -->

            <!-- TEXTO TESTIMONIOS -->
            <div class="col-6 d-flex align-items-center flex-column justify-content-center">

                <h4 class="verde text-center"> Nuestros </h4>
                <h2 class="font-weigh-bold text-center mt-3"> TESTIMONIOS </h2>
                <p class="mt-3 text-justify px-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit eos accusantium minima iusto nobis debitis delectus corporis non facere sit atque, unde aspernatur qui, illum itaque magni, maiores mollitia. Aliquam, architecto officiis. Doloremque magnam dicta est voluptatibus esse natus non? </p>

            </div>
            <!-- TEXTO TESTIMONIOS -->

        </div>

    </section>
    <!-- SECCION TESTIMONIOS -->

    <!-- SECCION DE VIDEOS -->
    <section id="seccion_videos" class="mt-5">

        <div class="d-flex">

            <!-- CARD 1 -->
            <div class="col-4 p-0 mt-5 card1 cian">

                <div class="imagen position-absolute"> <img src="images/mvideo1.jpg" alt=""> </div>

                <div class="fondo h-100 w-100 position-absolute"></div>

                <div class="titulo_y_parrafo d-flex col-12 p-0 align-items-center justify-content-center flex-column">

                    <div class="pt-5 mx-4">
                        <h4 class="blanco"> titulo </h4>
                        <p class="blanco text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eos cumque, itaque veritatis pariatur voluptatem est sequi repellendus sed accusamus dolore quae nam maiores blanditiis quam eligendi voluptas assumenda deserunt! </p>
                    </div>

                </div>

                <div class="caja_boton position-relative mx-4 mt-3">
                    <a class="boton_videos" href="#"> <span>&#8250;</span> </a>
                </div>

            </div>
            <!-- CARD 1 -->

            <!-- CARD 2 -->
            <div class="col-4 p-0 mt-5 card3 magenta">

                <div class="imagen position-absolute"> <img src="images/mvideo2.jpg" alt=""> </div>

                <div class="fondo h-100 w-100 position-absolute"></div>

                <div class="titulo_y_parrafo d-flex col-12 p-0 align-items-center justify-content-center flex-column">

                    <div class="pt-5 mx-4">
                        <h4 class="blanco"> titulo </h4>
                        <p class="blanco text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eos cumque, itaque veritatis pariatur voluptatem est sequi repellendus sed accusamus dolore quae nam maiores blanditiis quam eligendi voluptas assumenda deserunt! </p>
                    </div>

                </div>

                <div class="caja_boton position-relative mx-4 mt-3">
                    <a class="boton_videos" href="#"> <span>&#8250;</span> </a>
                </div>

            </div>
            <!-- CARD 2 -->

            <!-- CARD 3 -->
            <div class="col-4 p-0 mt-5 card4 yellow">

                <div class="imagen position-absolute"> <img src="images/mvideo3.jpg" alt=""> </div>

                <div class="fondo h-100 w-100 position-absolute"></div>

                <div class="titulo_y_parrafo d-flex col-12 p-0 align-items-center justify-content-center flex-column">

                    <div class="pt-5 mx-4">
                        <h4 class="blanco"> titulo </h4>
                        <p class="blanco text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eos cumque, itaque veritatis pariatur voluptatem est sequi repellendus sed accusamus dolore quae nam maiores blanditiis quam eligendi voluptas assumenda deserunt! </p>
                    </div>

                </div>

                <div class="caja_boton position-relative mx-4 mt-3">
                    <a class="boton_videos" href="#"> <span>&#8250;</span> </a>
                </div>

            </div>
            <!-- CARD 3 -->

        </div>

    </section>
    <!-- SECCION DE VIDEOS -->

    <!-- SECCION DESCARGAR FORMULARIOS -->
    <section id="seccion_formularios" class="position-relative">

        <div class="imagen position-absolute"> <img src="images/imagen_formularios.webp" alt=""> </div>

        <div class="d-flex h-100 w-100 position-relative">

            <div class="col-6"></div>

            <div class="contenido col-6 m-auto">
                <div>
                    <h4 class="y"> Encuentra todo lo que buscas </h4>
                    <h2 class="text-uppercase mt-3"> OFRECEMOS UN APLIO RANGO DE Lorem ipsum dolor sit amet consectetur </h2>
                    <p class="blanco mt-3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod repellat eum doloribus in non sed veritatis porro ab fuga similique. </p>
                </div>

                <div class="position-relative">
                    <i style="color: green; background-color:yellow" class="fas fa-check-square"></i>
                </div>

            </div>



        </div>

    </section>
    <!-- SECCION DESCARGAR FORMULARIOS -->






























    <?php include 'layout/archivos_footer.php' ?>



</body>

</html>