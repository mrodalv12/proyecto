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
<body>
    <!-- encabezado-->
    <?php include "../includes/header_proa.php" ?>
    <!-- fin del encabezado-->
    <!-- aqui comienza la bandeja de solicitudes-->
    <main class="contenido">
        <a href="Solicitudes_PAS.php"><h1>Solicitudes</h1></a>
        <!--botones primarios-->
        <div class="todas_las_solicitudes">
            <div class="bandeja_columna1">
                <a id="boton1pendientes" onclick="activarEstilo(this); mostrarContenido('solicitud_pendiente_')">
                        <p>Bandeja de entrada</p>
                        <p>6</p>
                    </a>

                <a id="boton2hechas" onclick="activarEstilo(this); mostrarContenido('solicitud_hecha_')">
                        <p>Bandeja de Hechas</p>
                        <p>2</p>
                    </a>
                    <a id="boton3papelera" onclick="activarEstilo(this); mostrarContenido('solicitud_rechazada_')">
                        <p>Papelera</p>
                        <p>1</p>
                    </a>
            </div>

            <!--fin de botones primarios-->
            <!--botones secundarios-->
            <div class="columna_2">
                <!--vacio-->
                <div id="bandeja_vacia">
                    <p>vacio</p>
                </div>
                <!--fin de vacio-->
                <!--bandeja de entrada-->
                <div class="bandeja">
                    <a id="solicitud_pendiente_aceptada_contenido_1" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('pendiente_aceptada_contenido_1')">
                            <ul>
                                <li><p>Lorem ipsum movedae tiresio</p></li>
                                <li><img src="../../../img/iconoSolicitudAceptada.png" alt="aceptada"></li>
                            </ul>
                    </a>

                    <a id="solicitud_pendiente_contenido_2" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('pendiente_contenido_2')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_3" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('pendiente_contenido_3')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_4" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('pendiente_contenido_4')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_5" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('pendiente_contenido_5')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                    <a id="solicitud_pendiente_contenido_6" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('pendiente_contenido_6')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                </div>


                <!--bandeja de hechas-->
                <div class="bandeja">
                    <a id="solicitud_hecha_contenido_7" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('hecha_contenido_7')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                    <a id="solicitud_hecha_contenido_8" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('hecha_contenido_8')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                </div>
                <!--bandeja de rechazadas-->
                <div class="bandeja">
                    <a id="solicitud_rechazada_contenido_9" class="item-columna2" onclick="activarEstilo2(this); mostrarContenido2('rechazada_contenido_9')">
                        <ul>
                            <li><p>Lorem ipsum movedae tiresio</p></li>
                        </ul>
                    </a>
                </div>
            </div>
            <!--fin de botones secundarios-->
            <!--vista del contenido-->
            <div class="solicitudes_vista_del_contenido">
                <div class="item-columna3" id="solicitud_desplegada_pendiente_aceptada_contenido_1">
                    <img src="../../../img/iconoUser.png" alt="user">
                    <div>
                        <ul>
                            <li>contenido 1</li>
                            <li>rol</li>
                            <li>DNI</li>
                            <li>asunto</li>
                            <li>tema</li>
                            <li>descripcion</li>
                        </ul>
                        <div class="boton">
                            <a>realizada</a>
                        </div>
                    </div>
                </div>
                <div class="item-columna3" id="solicitud_desplegada_pendiente_contenido_2">
                    <img src="../../../img/iconoUser.png" alt="user">
                    <div>
                        <ul>
                            <li>contenido 2</li>
                            <li>rol</li>
                            <li>DNI</li>
                            <li>asunto</li>
                            <li>tema</li>
                            <li>descripcion</li>
                        </ul>
                        <div class="boton">
                            <a>aceptada</a>
                            <a>rechazada</a>
                        </div>
                    </div>
                </div>
                <div class="item-columna3" id="solicitud_desplegada_pendiente_contenido_3">
                    <img src="../../../img/iconoUser.png" alt="user">
                    <div>
                        <ul>
                            <li>contenido 3</li>
                            <li>rol</li>
                            <li>DNI</li>
                            <li>asunto</li>
                            <li>tema</li>
                            <li>descripcion</li>
                        </ul>
                        <div class="boton">
                            <a>aceptada</a>
                            <a>rechazada</a>
                        </div>
                    </div>
                </div>
                <div class="item-columna3" id="solicitud_desplegada_pendiente_contenido_4">
                    <img src="../../../img/iconoUser.png" alt="user">
                    <div>
                        <ul>
                            <li>contenido 4</li>
                            <li>rol</li>
                            <li>DNI</li>
                            <li>asunto</li>
                            <li>tema</li>
                            <li>descripcion</li>
                        </ul>
                        <div class="boton">
                            <a>aceptada</a>
                            <a>rechazada</a>
                        </div>
                    </div>
                </div>
                <div class="item-columna3" id="solicitud_desplegada_pendiente_contenido_5">
                    <img src="../../../img/iconoUser.png" alt="user">
                    <div>
                        <ul>
                            <li>contenido 5</li>
                            <li>rol</li>
                            <li>DNI</li>
                            <li>asunto</li>
                            <li>tema</li>
                            <li>descripcion</li>
                        </ul>
                        <div class="boton">
                            <a>aceptada</a>
                            <a>rechazada</a>
                        </div>
                    </div>
                </div>
                <div class="item-columna3" id="solicitud_desplegada_pendiente_contenido_6">
                    <img src="../../../img/iconoUser.png" alt="user">
                    <div>
                        <ul>
                            <li>contenido 6</li>
                            <li>rol</li>
                            <li>DNI</li>
                            <li>asunto</li>
                            <li>tema</li>
                            <li>descripcion</li>
                        </ul>
                        <div class="boton">
                            <a>aceptada</a>
                            <a>rechazada</a>
                        </div>
                    </div>
                </div>
                <!--sin contenido seleccionado-->
                <div class="sin_contenido" id="sin_contenido_desplegado">
                    <img src="../../../img/iconoNoHaySolicitudesSeleccionadas.png" alt="icono sin solicitudes"></li>
                    <p>Selecciona una solicitud para atenderla</p>
                    <p>No hay solicitudes seleccionadas</p>
                </div>
        </div>
        <!--fin de vista de contenido-->
    </main>
    <!-- footer-->
    <?php include "../includes/footer_proa.php" ?>
    <!-- fin del footer-->
    <script src="../../js/solicitudes_PAS.js"></script>
</body>
</html>
