<!-- BOTONES DE SUBIR -->

    <!-- VA EN EL FOOTER -->
    <div class="subir">
        <div class="position-absolute w-100 h-100 efecto"></div>
        <i class="icono position-absolute w-100 h-100 fas fa-angle-up"></i>
    </div>
    <!-- VA EN EL FOOTER -->

    <!-- ZOOM-IN -->
        .subir {
        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 200ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            border-radius: 25px;
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 250ms;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 0;
            left: 0;
            transform: scale(0);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                transform: scale(2);
            }

        
        .icono {
                    // COLOR DEL ICONO CON HOVER
                    color: black;
                    // COLOR DEL ICONO CON HOVER
                    animation: icono 300ms ease-in-out;
                }

                @keyframes icono {
                    0% {
                        filter: none;
                    }

                    50% {
                        filter: blur(10px);
                    }

                    100% {
                        filter: none;
                    }

                }
            
                
            }
        }
    <!-- ZOOM-IN -->

    <!-- ZOOM OUT -->

        .subir {
        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: black;
        // COLOR DEL ICONO

        display: none;
        transition: all 200ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            border-radius: 25px;
            background-color: white;
            opacity: 1;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 250ms;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 0;
            left: 0;
            transform: scale(2);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 0;
                transform: scale(0);
            }

        
        .icono {
                    // COLOR DEL ICONO CON HOVER
                    color: black;
                    // COLOR DEL ICONO CON HOVER
                    animation: icono 300ms ease-in-out;
                }

                @keyframes icono {
                    0% {
                        filter: none;
                    }

                    50% {
                        filter: blur(10px);
                    }

                    100% {
                        filter: none;
                    }

                }
            
                
            }
        }
    <!-- ZOOM OUT -->

    <!-- IZQUIERDA DERECHA (CIRCULO) -->


        .subir {
        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 200ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            border-radius: 25px;
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 250ms ease-in-out;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 0;
            left: -25px;
            transform: scale(0);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                transform: scale(2);
            }

        
            .icono {
                        // COLOR DEL ICONO CON HOVER
                        color: black;
                        // COLOR DEL ICONO CON HOVER
                        animation: icono 300ms ease-in-out;
                    }

                    @keyframes icono {
                        0% {
                            filter: none;
                        }

                        50% {
                            filter: blur(10px);
                        }

                        100% {
                            filter: none;
                        }

                    }
                
                    
                }
            }

    <!-- IZQUIERDA DERECHA (CIRCULO) -->

    <!-- DERECHA - IZQUIERDA (CIRCULO) -->

        .subir {
        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 200ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            border-radius: 25px;
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 250ms ease-in-out;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 0;
            left: 25px;
            transform: scale(0);
        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                transform: scale(2);
            }

       
        .icono {
                    // COLOR DEL ICONO CON HOVER
                    color: black;
                    // COLOR DEL ICONO CON HOVER
                    animation: icono 300ms ease-in-out;
                }

                @keyframes icono {
                    0% {
                        filter: none;
                    }

                    50% {
                        filter: blur(10px);
                    }

                    100% {
                        filter: none;
                    }

                }
                
            }
        }

    <!-- DERECHA - IZQUIERDA (CIRCULO) -->

    <!-- ARRIBA - ABAJO (CIRCULO) -->
        .subir {
        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 200ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }
    
        .efecto {
            border-radius: 25px;
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 250ms ease-in-out;
            // TIEMPO DE TRANSICION DEL FONDO
            top: -40px;
            left: 0;
            transform: scale(0);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                transform: scale(2);
            }

        
        .icono {
                    // COLOR DEL ICONO CON HOVER
                    color: black;
                    // COLOR DEL ICONO CON HOVER
                    animation: icono 300ms ease-in-out;
                }

                @keyframes icono {
                    0% {
                        filter: none;
                    }

                    50% {
                        filter: blur(10px);
                    }

                    100% {
                        filter: none;
                    }

                }
            
                
            }
        }

    <!-- ARRIBA - ABAJO (CIRCULO) -->
    
    <!-- ABAJO - ARRIBA (CIRCULO) -->
        .subir {
        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 200ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            border-radius: 25px;
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 250ms ease-in-out;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 30px;
            left: 0;
            transform: scale(0);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                transform: scale(2);
            }

       
        .icono {
                    // COLOR DEL ICONO CON HOVER
                    color: black;
                    // COLOR DEL ICONO CON HOVER
                    animation: icono 300ms ease-in-out;
                }

                @keyframes icono {
                    0% {
                        filter: none;
                    }

                    50% {
                        filter: blur(10px);
                    }

                    100% {
                        filter: none;
                    }

                }
            
                
            }
        }
    
    <!-- ABAJO - ARRIBA (CIRCULO) -->

    <!-- IZQUIERDA - DERECHA (CUADRADO) -->

        .subir {

        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 250ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 350ms ease-in-out;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 0;
            left: -99px;
            transform: scale(0);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                left:0;
                transform: scale(2);
            }

        
        .icono {
                // COLOR DEL ICONO CON HOVER
                color: black;
                // COLOR DEL ICONO CON HOVER
                animation: icono 300ms ease-in-out;
            }

            @keyframes icono {
                0% {
                    filter: none;
                }

                50% {
                    filter: blur(10px);
                }

                100% {
                    filter: none;
                }

            }
        
            
        }
        }

    <!-- IZQUIERDA - DERECHA (CUADRADO) -->

    <!-- DERECHA - IZQUIERDA (CUADRADO) -->
            .subir {

        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 250ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 350ms ease-in-out;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 0;
            left: 99px;
            transform: scale(0);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                left:0;
                transform: scale(2);
            }

            
        .icono {
                // COLOR DEL ICONO CON HOVER
                color: black;
                // COLOR DEL ICONO CON HOVER
                animation: icono 300ms ease-in-out;
            }

            @keyframes icono {
                0% {
                    filter: none;
                }

                50% {
                    filter: blur(10px);
                }

                100% {
                    filter: none;
                }

            }
        
            
        }
        }

    <!-- DERECHA - IZQUIERDA (CUADRADO) -->

    <!-- ARRIBA - ABAJO (CUADRADO) -->
        .subir {

            // COLOR DE FONDO
            background-color: $verde;
            // COLOR DE FONDO

            // COLOR DEL ICONO
            color: white;
            // COLOR DEL ICONO

            display: none;
            transition: all 250ms ease-in-out;
            padding: 5px;
            font-size: 40px;
            cursor: pointer;
            position: fixed;
            bottom: 47px;
            width: 50px!important;
            height: 50px!important;
            border-radius: 25px;
            right: 20px;
            -webkit-box-shadow: -1px 1px 5px 1px grey;
            box-shadow: -1px 1px 5px 1px grey;
            z-index: 1000;
            overflow: hidden;

            .icono {
                // TIEMPO DE TRANSICION DEL ICONO
                transition: all 250ms;
            // TIEMPO DE TRANSICION DEL ICONO
                left: 0;
                top: 0;
            }

            .efecto {
                background-color: white;
                opacity: 0;
                // TIEMPO DE TRANSICION DEL FONDO
                transition: all 350ms ease-in-out;
                // TIEMPO DE TRANSICION DEL FONDO
                top: -25px;
                left: 0px;
                transform: scale(0);

            }

            &:hover {

                .efecto {
                    // COLOR DE FONDO CON HOVER
                    background-color: white;
                    // COLOR DE FONDO CON HOVER
                    height: 58px;
                    padding: 33px;
                    opacity: 1;
                    left:0;
                    transform: scale(2);
                }

            
            .icono {
                    // COLOR DEL ICONO CON HOVER
                    color: black;
                    // COLOR DEL ICONO CON HOVER
                    animation: icono 300ms ease-in-out;
                }

                @keyframes icono {
                    0% {
                        filter: none;
                    }

                    50% {
                        filter: blur(10px);
                    }

                    100% {
                        filter: none;
                    }

                }
            
                
            }
            }

    <!-- ARRIBA - ABAJO (CUADRADO) -->

    <!-- ABAJO - ARRIBA (CUDRADO) -->
            .subir {

        // COLOR DE FONDO
        background-color: $verde;
        // COLOR DE FONDO

        // COLOR DEL ICONO
        color: white;
        // COLOR DEL ICONO

        display: none;
        transition: all 250ms ease-in-out;
        padding: 5px;
        font-size: 40px;
        cursor: pointer;
        position: fixed;
        bottom: 47px;
        width: 50px!important;
        height: 50px!important;
        border-radius: 25px;
        right: 20px;
        -webkit-box-shadow: -1px 1px 5px 1px grey;
        box-shadow: -1px 1px 5px 1px grey;
        z-index: 1000;
        overflow: hidden;

        .icono {
            // TIEMPO DE TRANSICION DEL ICONO
            transition: all 250ms;
        // TIEMPO DE TRANSICION DEL ICONO
            left: 0;
            top: 0;
        }

        .efecto {
            background-color: white;
            opacity: 0;
            // TIEMPO DE TRANSICION DEL FONDO
            transition: all 350ms ease-in-out;
            // TIEMPO DE TRANSICION DEL FONDO
            top: 25px;
            left: 0px;
            transform: scale(0);

        }

        &:hover {

            .efecto {
                // COLOR DE FONDO CON HOVER
                background-color: white;
                // COLOR DE FONDO CON HOVER
                height: 58px;
                padding: 33px;
                opacity: 1;
                left:0;
                transform: scale(2);
            }

            
        .icono {
                // COLOR DEL ICONO CON HOVER
                color: black;
                // COLOR DEL ICONO CON HOVER
                animation: icono 300ms ease-in-out;
            }

            @keyframes icono {
                0% {
                    filter: none;
                }

                50% {
                    filter: blur(10px);
                }

                100% {
                    filter: none;
                }

            }
        
            
        }
        }   

    <!-- ABAJO - ARRIBA (CUDRADO) -->


<!-- BOTONES DE SUBIR -->


<!-- ESTILOS GENERALES -->

    p,h1,h2,h3,h4,h5,h6 {
        padding: 0;
        margin:0;
    }

<!-- ESTILOS GENERALES -->



    








