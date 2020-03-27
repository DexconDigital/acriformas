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
            <img src="images/mvideo3.jpg" alt="">
        </div>

    </section>
    <!-- IMAGENES PRINCIPALES -->

    <!-- SERVICIOS -->
    <section id="servicios">

        <div class="d-flex">

            <div class="izquierda d-flex align-items-start justify-content-center flex-column col-3">
                <h2 class="mb-3 font-weight-bold"> Servicios </h2>
                <p> Tanto en nuestras oficinas como en línea, puedes encontrar las más completas soluciones en comunicación gráfica integral. </p>
            </div>

            <div class="derecha p-0 col-9 d-flex flex-wrap">

                <a href="s_digital.php" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono1 col-2">
                    <img src="images/impresora.png" alt="">
                    <p class="text-center mt-2"> Impresión digital </p>
                </a>

                <a href="s_offset.php" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono2 col-2">
                    <img src="images/impresora_g.png" alt="">
                    <p class="text-center mt-2"> Impresión offset </p>
                </a>

                <a href="s_industrial.php" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono3 col-2">
                    <img src="images/folleto.png" alt="">
                    <p class="text-center mt-2"> Señalización industrial </p>
                </a>

                <a href="s_bienestar.php" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono4 col-2">
                    <img src="images/circulo.png" alt="">
                    <p class="text-center mt-2"> Bienestar y eventos empresariales </p>
                </a>

                <a href="s_eventos.php" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono5 col-2">
                    <img src="images/papel.png" alt="">
                    <p class="text-center mt-2"> Ferias y eventos </p>
                </a>

                <a href="s_merchandising.php" class="p-0 d-flex flex-column align-items-center justify-content-center py-5 icono icono6 col-2">
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
            <h2 class="mt-3 font-weight-bold"> ACRIFORMAS PUBLICIDAD S.A.S. </br> DIGITAL & MERCHANDISING </h2>
            <p class="mt-2 text-justify"> Somos un aliado estratégico para nuestros clientes en el desarrollo de la
                comunicación gráfica de forma integral, a través de un talento humano
                competente y comprometido, generando los resultados y beneficios esperados
                mediante ideas creativas e innovadoras, eco-amigables con un enfoque de
                responsabilidad social empresarial.
            </p>

            <!-- BOTON -->
            <a href="quienes_somos.php" class="position-relative btn boton blanco mt-3">
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
                <h2 class="w-75 text-center font-weight-bold blanco mt-3 text-uppercase"> Experiencia en soluciones de impresión, digital y merchandising por más de 13 años. </h2>

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
                <p class="mt-3 text-justify px-3"> En Acriformas Publicidad, nos esforzamos por lograr los mejores resultados, por eso procuramos cumplir con los más altos estándares en cada proyecto que emprendemos, ya que de esta manera podemos asegurar la satisfacción y fidelidad de nuestros clientes. </p>

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
                        <h4 class="blanco"> Impresión Digital </h4>
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

        <div class="imagen w-100 h-100 position-absolute"> <img src="images/imagen_formularios.webp" alt=""> </div>

        <!-- CONTENIDO -->
        <div class="d-flex h-100 w-100 position-relative">

            <div class="col-6"></div>

            <div class="contenido col-6 m-auto">

                <!-- TITULOS Y PARRAFO -->
                <div>
                    <h4 class="verde"> Encuentra todo lo que buscas </h4>
                    <h2 class="text-uppercase mt-3 font-weight-bold f50 blanco"> OFRECEMOS UN AMPLIO RANGO DE SERVICIOS </h2>
                    <p class="blanco mt-3"> Tenemos la experiencia para aportar soluciones claras y creativas para nuestros clientes, ayudándoles a crear y compartir experiencias de marca de vanguardia orientadas a comunicar la esencia de los proyectos en cada punto de contacto, con el propósito de contribuir al logro de sus objetivos. </p>
                </div>
                <!-- TITULOS Y PARRAFO -->


                <!-- DESCARGABLES  -->
                <div class="position-relative d-flex">

                    <div class="mr-3 d-flex align-items-baseline">
                        <i class="mr-2 mt-3 icono fas fa-check-square"></i>
                        <a class="blanco" href="#">
                            <p> Brochure Digital </p>
                        </a>
                    </div>

                    <div class="d-flex align-items-baseline">
                        <i class="mr-2 mt-3 icono fas fa-check-square"></i>
                        <a class="blanco" target="blank" href="https://drive.google.com/open?id=1aCIwhplwCgGa7ThOhL5Td03j9r2_FzSk">
                            <p> Catalogo Merchandising </p>
                        </a>
                    </div>

                </div>
                <!-- DESCARGABLES  -->

            </div>

        </div>
        <!-- CONTENIDO -->

    </section>
    <!-- SECCION DESCARGAR FORMULARIOS -->

    <!-- SECCION PROYECTOS -->
    <section id="seccion_proyectos" class="py-5">

        <div>
            <h4 class="text-center verde"> Proyectos recientes </h4>
            <h2 class="font-weight-bold text-center f50 mt-3"> Nuestros Proyectos </h2>
        </div>


        <!-- TARJETAS -->
        <div class="d-flex flex-wrap mt-5">

            <!-- TARJETA 1 -->
            <a href="proyectos.php" class="col-4 p-0 position-relative">

                <div class="imagen position-absolute">
                    <img src="images/proyecto1.jpg" alt="">
                </div>

                <div class="fondo_negro position-absolute"> </div>

                <div class="contenido position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                    <h2 class="blanco font-weight-bold"> Titulo del proyecto </h2>
                </div>

            </a>
            <!-- TARJETA 1 -->

            <!-- TARJETA 2 -->
            <a href="proyectos.php" class="col-4 p-0 position-relative">

                <div class="imagen position-absolute">
                    <img src="images/proyecto2.jpg" alt="">
                </div>

                <div class="fondo_negro position-absolute"> </div>

                <div class="contenido position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                    <h2 class="blanco font-weight-bold"> Titulo del proyecto </h2>
                </div>

            </a>
            <!-- TARJETA 2 -->

            <!-- TARJETA 3 -->
            <a href="proyectos.php" class="col-4 p-0 position-relative">

                <div class="imagen position-absolute">
                    <img src="images/proyecto3.jpg" alt="">
                </div>

                <div class="fondo_negro position-absolute"> </div>

                <div class="contenido position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                    <h2 class="blanco font-weight-bold"> Titulo del proyecto </h2>
                </div>

            </a>
            <!-- TARJETA 3 -->

            <!-- TARJETA 4 -->
            <a href="proyectos.php" class="col-4 p-0 position-relative">

                <div class="imagen position-absolute">
                    <img src="images/proyecto1.jpg" alt="">
                </div>

                <div class="fondo_negro position-absolute"> </div>

                <div class="contenido position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                    <h2 class="blanco font-weight-bold"> Titulo del proyecto </h2>
                </div>

            </a>
            <!-- TARJETA 4 -->

            <!-- TARJETA 5 -->
            <a href="proyectos.php" class="col-4 p-0 position-relative">

                <div class="imagen position-absolute">
                    <img src="images/proyecto2.jpg" alt="">
                </div>

                <div class="fondo_negro position-absolute"> </div>

                <div class="contenido position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                    <h2 class="blanco font-weight-bold"> Titulo del proyecto </h2>
                </div>

            </a>
            <!-- TARJETA 5 -->

            <!-- TARJETA 6 -->
            <a href="proyectos.php" class="col-4 p-0 position-relative">

                <div class="imagen position-absolute">
                    <img src="images/proyecto3.jpg" alt="">
                </div>

                <div class="fondo_negro position-absolute"> </div>

                <div class="contenido position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                    <h2 class="blanco font-weight-bold"> Titulo del proyecto </h2>
                </div>

            </a>
            <!-- TARJETA 6 -->

        </div>
        <!-- TARJETAS -->

        <!-- BOTON -->
        <div class="container-fluid d-flex align-items-center justify-content-center mt-5">
            <a href="proyectos.php" class="btn boton blanco">
                <p class="contenido_boton"> Ver todos los proyectos </p>
                <div class="c1"></div>
                <div class="c2"></div>
                <div class="c3"></div>
            </a>
        </div>
        <!-- BOTON -->

    </section>
    <!-- SECCION PROYECTOS -->

    <!-- SECCION FAQ Y CAPACIDADES -->
    <section id="seccion_faq" class="container d-flex mt-5">

        <!-- NUESTRAS CAPACIDADES -->
        <div class="col-6">

            <h2 class="font-weight-bold text-center mb-3"> Nuestras capacidades </h2>
            <p> Nuestras capacidades están estructuradas para apoyar a las compañías a enfrentar el futuro. </p>
            <br />
            <p> Encontramos nuevos propósitos, para ser más relevantes y aprovechar las oportunidades para impulsar el crecimiento de nuestros clientes de maneras sin precedentes, con las herramientas publicitarias y creativas que rompen los esquemas tradicionales del mercado actual. </p>

            <p class="mt-3 font-weight-bold"> IMPRESION DIGITAL </p>

            <div class="progress my-2">
                <div class="progress-bar pg1 bg_c progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> IMPRESION OFFSET </p>

            <div class="progress my-2">
                <div class="progress-bar pg2 bg_c progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> IMPRESION MERCHANDISING </p>

            <div class="progress my-2">
                <div class="progress-bar pg3 bg_c progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold"> FERIAS Y EVENTOS </p>

            <div class="progress my-2">
                <div class="progress-bar pg4 bg_c progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold text-uppercase"> Bienestar y eventos empresariales </p>

            <div class="progress my-2">
                <div class="progress-bar pg4 bg_c progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p class="mt-3 font-weight-bold text-uppercase"> Señalización industrial </p>

            <div class="progress my-2">
                <div class="progress-bar pg4 bg_c progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </div>
        <!-- NUESTRAS CAPACIDADES -->


        <!-- SECCION DE PREGUNTAS -->
        <div class="col-6">

            <h2 class="font-weight-bold text-center"> FAQ </h2>

            <!-- ACORDEON CON PREGUNTAS -->
            <div class="accordion" id="accordionExample">

                <button id="boton1" class="rounded col-12 my-2" data-toggle="collapse" data-target="#p1" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <!-- <i class="fas fa-window-minimize"></i> -->
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono1" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #1 </p>
                    </div>

                </button>

                <div id="p1" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #1*
                    </div>
                </div>

                <button id="boton2" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p2" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono2" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #2 </p>
                    </div>

                </button>

                <div id="p2" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #2*
                    </div>
                </div>


                <button id="boton3" class="rounded col-12 mb-2" data-toggle="collapse" data-target="#p3" aria-expanded="true" aria-controls="collapseOne">

                    <div class="d-flex align-items-center">
                        <div class="mr-2 mas d-flex align-items-center justify-content-center"><i id="icono3" class="c fas fa-plus"></i></div>
                        <p> PREGUNTA #3 </p>
                    </div>

                </button>

                <div id="p3" class="collapse">
                    <div class="card-body">
                        *Respuesta de la pregunta #3*
                    </div>
                </div>




            </div>
            <!-- ACORDEON CON PREGUNTAS -->


            <!-- BOTON -->
            <div class="container-fluid d-flex align-items-center justify-content-center mt-3">
                <a href="faq.php" class="btn boton blanco">
                    <p class="contenido_boton"> Ver todas las preguntas </p>
                    <div class="c1"></div>
                    <div class="c2"></div>
                    <div class="c3"></div>
                </a>
            </div>
            <!-- BOTON -->

        </div>
        <!-- SECCION DE PREGUNTAS -->

    </section>
    <!-- SECCION FAQ Y CAPACIDADES -->

    <!-- BANNER -->
    <section class="mt-5">
        <img class="w-100" src="images/banner.png" alt="">
    </section>
    <!-- BANNER -->

    <!-- NOTICIAS Y TWITTER FEED -->
    <section id="noticias_y_twitter_feed" class="py-5">

        <div class="container d-flex">

            <!-- NOTICIAS -->
            <div class="col-6">

                <h2 class="text-center  font-weight-bold mb-3"> NOTICIAS </h2>

                <!-- NOTICIA 1 -->
                <a href="#" class="noticia d-flex align-items-center justify-content-center mb-2">

                    <div class="d_m d-flex flex-column align-items-center justify-content-center bg_m col-3 h-100">
                        <p class="text-center blanco dia"> 27 </p>
                        <p class="text-center blanco mes"> ENERO </p>
                    </div>

                    <div class="col-9 h-100 bg_blanco d-flex align-items-start justify-content-center flex-column h-100">
                        <p> <span class="m"> Categoria </span> <span class="text-muted">/ 27/01/2019</span> </p>
                        <p class="font-weight-bold"> *Descripción de Noticia* </p>
                    </div>
                </a>
                <!-- NOTICIA 1 -->

                <!-- NOTICIA 2 -->
                <a href="#" class="noticia d-flex align-items-center justify-content-center mb-2">

                    <div class="d_m d-flex flex-column align-items-center justify-content-center bg_m col-3 h-100">
                        <p class="text-center blanco dia"> 02 </p>
                        <p class="text-center blanco mes"> FEBRERO </p>
                    </div>

                    <div class="col-9 h-100 bg_blanco d-flex align-items-start justify-content-center flex-column h-100">
                        <p> <span class="m"> Categoria </span> <span class="text-muted">/ 27/01/2019</span> </p>
                        <p class="font-weight-bold"> *Descripción de Noticia* </p>
                    </div>
                </a>
                <!-- NOTICIA 2 -->

                <!-- NOTICIA 3 -->
                <a href="#" class="noticia d-flex align-items-center justify-content-center mb-2">

                    <div class="d_m d-flex flex-column align-items-center justify-content-center bg_m col-3 h-100">
                        <p class="text-center blanco dia"> 08 </p>
                        <p class="text-center blanco mes"> NOV </p>
                    </div>

                    <div class="col-9 h-100 bg_blanco d-flex align-items-start justify-content-center flex-column h-100">
                        <p> <span class="m"> Categoria </span> <span class="text-muted">/ 27/01/2019</span> </p>
                        <p class="font-weight-bold"> *Descripción de Noticia* </p>
                    </div>
                </a>
                <!-- NOTICIA 3 -->

            </div>
            <!-- NOTICIAS -->

            <!-- INSTAGRAM FEED  -->
            <div class="col-6 d-flex align-items-center justify-content-center">
                <h2> *Twitter feed aquí* </h2>
            </div>
            <!-- INSTAGRAM FEED  -->
        </div>

    </section>
    <!-- NOTICIAS Y TWITTER FEED -->

    <!-- FORMULARIO DE CONTACTO -->
    <section id="formulario_contacto" class="mt-5 d-flex container align-items-center">

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

    <!-- MAPA -->
    <section>
        <iframe id="mapa" class="mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5623.363408113939!2d-74.21400795526914!3d4.714647444613317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f82abe25a708f%3A0x5dffb51a7a77f2d3!2sCra.%2012%20%2311-88%2C%20Funza%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1580223268134!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <!-- MAPA -->


    <!-- FOOTER -->
    <?php include 'layout/footer.php' ?>
    <!-- FOOTER -->


    <?php include 'layout/archivos_footer.php' ?>

    <script src="js/botones_faq.js"></script>

    <script src="js/barras_de_progreso.js"></script>

</body>

</html>