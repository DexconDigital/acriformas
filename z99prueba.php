<?php include 'variables/variables.php';

$page = "Inicio";
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



    <style>
        a {
            border: none;
            overflow: hidden;
        }

        a:hover .hover {
            top: 0;
            left:0%;
        } 
    

        .texto {
            z-index: 500;
            position: relative;
        }



        .boton2 {
            top: 0;
            left: 0;
            background-color: green;
            z-index: 300;
        }

        .hover {
            top: -100%;
            left: 0;
            background-color: red;
            z-index: 400;
            transition: all 250ms;
        }


    </style>

</head>

<body>

    <a href="https://google.com" class="ml-5 btn position-relative">

        <p class="texto"> prueba de boton dsklfsdkljfdskl </p>
        <div class="boton2 w-100 h-100 position-absolute"></div>
        <div class="hover w-100 h-100 position-absolute"></div>


    </a>












    <?php include 'layout/archivos_footer.php' ?>


</body>


</html>