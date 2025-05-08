<!----------------------------------------------------------------------------------------------------------->
<?php
include "../includes/funciones_inicio_PAS.php";
include "../includes/datos_usuario.php";

if ($thisUser->rol != "PAS") {
    echo "Acceso denegado. No tienes permisos para ver esta página.";
    exit();
}
?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PROA</title>
    <link rel="preload" href="../../css/solicitudesPAS.css" as="style" />
    <link rel="stylesheet" href="../../css/solicitudesPAS.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<!----------------------------------------------------------------------------------------------------------->
<body>
    <!-- encabezado-->
    <?php include "../includes/header_proa.php" ?>
    <!-- fin del encabezado-->
<!----------------------------------------------------------------------------------------------------------->



    <!-- aqui comienza la bandeja de solicitudes-->
    <section class="contenido">
        <h1>Solicitudes</h1>
        <!--botones primarios-->
        <div class="todas_las_solicitudes">
            <div class="bandeja_columna1">
                    <a onclick="activarEstilo(this); mostrarContenido('solicitud_pendiente_')">
                            <p>Bandeja de entrada</p>
                            <p>num</p>
                            </a>
                    <a onclick="activarEstilo(this); mostrarContenido('solicitud_hecha_')">
                        <p>Bandeja de Hechas</p>
                        <p>num</p>
                    </a>
                    <a onclick="activarEstilo(this); mostrarContenido('solicitud_rechazada_')">
                        <p>Papelera</p>
                        <p>num</p>
                    </a>
            </div>

            <!--fin de botones primarios-->

            <!--botones secundarios-->
            <div class="columna_2">
                <!--vacio-->
                <p id="bandeja_vacia">vacio</p>
                <!--fin de vacio-->
                <!--bandeja de entrada-->
                <div class="bandeja">
                    <a id="solicitud_pendiente_contenido_1" class="item-columna2" onclick="hacerAlgo()">
                            <ul>
                                <li><p>Lorem ipsum movedae tiresio</p></li>
                                <li><img src="https://placehold.co/30x30" alt="aceptada?"></li>
                            </ul>
                    </a>

                    <a id="solicitud_pendiente_contenido_2" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                            <li><img src="https://placehold.co/30x30" alt="aceptada?"></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_3" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                            <li><img src="https://placehold.co/30x30" alt="aceptada?"></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_4" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                            <li><img src="https://placehold.co/30x30" alt="aceptada?"></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_5" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                            <li><img src="https://placehold.co/30x30" alt="aceptada?"></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_6" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                            <li><img src="https://placehold.co/30x30" alt="aceptada?"></li>
                        </ul>
                    </a>
                </div>


                <!--bandeja de hechas-->
                <div class="bandeja">
                    <a id="solicitud_hecha_contenido_7" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                    <a id="solicitud_hecha_contenido_7" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                </div>


                <!--bandeja de rechazadas-->
                <div class="bandeja">
                    <a id="solicitud_rechazada_contenido_9" class="item-columna2" onclick="hacerAlgo()">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                </div>
            </div>
            <!--fin de botones secundarios-->

            <!--vista del contenido-->
            <div class="solicitudes_vista_del_contenido">

                <ul class="contenidoPendientes" id="contenido_1">
                    <img src="https://placehold.co/50x50" alt="user">
                    <div>
                        <li>nombre y apellido</li>
                        <li>rol</li>
                        <li>DNI</li>
                        <li>asunto</li>
                        <li>tema</li>
                        <li>descripcion</li>
                        <div>
                            <button>aceptada</button>
                            <button>rechazada</button>
                        </div>
                    </div>
                </ul>
                <!--sin contenido seleccionado-->
                <ul id="sin_contenido">
                    <li><img src="https://placehold.co/100x100" alt="icono sin solicitudes"></li>
                    <li><p>No hay solicitudes que atender</p></li>
                </ul>

                <!--contenido de solicitudes pendientes-->

                <ul class="contenidoPendientes" id="contenido_2">
                    <img src="https://placehold.co/50x50" alt="user">
                    <li>nombre y apellido</li>
                    <li>rol</li>
                    <li>DNI</li>
                    <li>asunto</li>
                    <li>tema</li>
                    <li>descripcion</li>
                    <ul>
                        <li><button>aceptada</button></li>
                        <li><button>rechazada</button></li>
                    </ul>
                </ul>
                <ul class="contenidoPendientes" id="contenido_3">
                    <img src="https://placehold.co/50x50" alt="user">
                    <li>nombre y apellido</li>
                    <li>rol</li>
                    <li>DNI</li>
                    <li>asunto</li>
                    <li>tema</li>
                    <li>descripcion</li>
                    <ul>
                        <li><button>aceptada</button></li>
                        <li><button>rechazada</button></li>
                    </ul>
                </ul>
                <ul class="contenidoPendientes" id="contenido_4">
                    <img src="https://placehold.co/50x50" alt="user">
                    <li>nombre y apellido</li>
                    <li>rol</li>
                    <li>DNI</li>
                    <li>asunto</li>
                    <li>tema</li>
                    <li>descripcion</li>
                    <ul>
                        <li><button>aceptada</button></li>
                        <li><button>rechazada</button></li>
                    </ul>
                </ul>
                <ul class="contenidoPendientes" id="contenido_5">
                    <img src="https://placehold.co/50x50" alt="user">
                    <li>nombre y apellido</li>
                    <li>rol</li>
                    <li>DNI</li>
                    <li>asunto</li>
                    <li>tema</li>
                    <li>descripcion</li>
                    <ul>
                        <li><button>aceptada</button></li>
                        <li><button>rechazada</button></li>
                    </ul>
                </ul>
                <ul class="contenidoPendientes" id="contenido_6">
                    <img src="https://placehold.co/50x50" alt="user">
                    <li>nombre y apellido</li>
                    <li>rol</li>
                    <li>DNI</li>
                    <li>asunto</li>
                    <li>tema</li>
                    <li>descripcion</li>
                    <ul>
                        <li><button>aceptada</button></li>
                        <li><button>rechazada</button></li>
                    </ul>
                </ul>

            </div>
        </div>


        <!--fin de vista de contenido-->
    </section>


    <!----------------------------------------------------------------------------------------------------------->
    <!-- footer-->
    <?php include "../includes/footer_proa.php" ?>
    <!-- fin del footer-->

    <script src="../../js/solicitudes_PAS.js"></script>
</body>
<!----------------------------------------------------------------------------------------------------------->
</html>
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
