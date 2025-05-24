<?php
include "../includes/funciones_inicio.php";
include "../includes/datos_usuario.php";

?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PROA</title>
    <link rel="preload" href="../../css/PAS/inicioPAS.css" as="style" />
    <link rel="stylesheet" href="../../css/PAS/inicioPAS.css">
    <link rel="stylesheet" href="../../css/header_footerPROA.css">
</head>
<body>
<!--encabezado-->
<?php include "../includes/header_proa_pas.php" ?>
<!--fin del encabezado-->
<main class="contenido">

    <!--esto es el saludo-------------------------------------------------------------------------------->
    <div class="saludo">
        <div class="texto">
            <?php
            $hola = buenas();
            echo "<h1>$hola <br> $thisUser->username</h1>";
            ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto consequuntur dolore, excepturi expedita fugit.</p>
        </div>
    </div>
    <!--fin del saludo------------------------------------------------------------------------------------>
    <!--esto son las solicitudes recientes-------------------------------------------------------------->
    <div class="solicitudes">
        <h2>Solicitudes más recientes</h2>
        <!--las 5 solicitudes mas recientes----------------------------->
        <div class="mensajes">
            <ol>
                <!--1 solicitud-->
                <li class="item" id="0001">
                        <a href="Solicitudes_PAS.php?seccion=solicitud_desplegada_pendiente_contenido_2">
                            <div class="arriba_mensaje">
                                <img src="../../../img/iconoUser.png" alt="icono">
                                <ul>
                                    <li>Quiannette Hachel</li>
                                    <li><span class="rol">Estudiante<span></li>
                                </ul>
                                <p><span class="rol">Asunto:</span> <span class="mensaje_del_asunto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Doloremque hic iste labore.</span></p>
                            </div>
                            <div class="fecha_y_hora">
                                <ul>
                                    <li>yyyy/mm/dd</li>
                                    <li>hh:mm</li>
                                </ul>
                            </div>
                        </a>
                </li>

                <!--2 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php?seccion=solicitud_desplegada_pendiente_contenido_3">
                        <div class="arriba_mensaje">
                            <img src="../../../img/iconoUser.png" alt="icono">
                            <ul>
                                <li>Nombre</li>
                                <li class="rol">Profesor</li>
                            </ul>
                            <p><span class="rol">Asunto:</span><span class="mensaje_del_asunto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Doloremque hic iste labore, libero maxime mollitia obcaecati. Eius, repellendus
                                reprehenderit? A ab aspernatur delectus ducimus, est iusto minima molestias
                                    quidem voluptas.</span></p>
                        </div>
                        <div class="fecha_y_hora">
                            <ul>
                                <li>yyyy/mm/dd</li>
                                <li>hh:mm</li>
                            </ul>
                        </div>
                    </a>
                </li>

                <!--3 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php?seccion=solicitud_desplegada_pendiente_contenido_4">
                        <div class="arriba_mensaje">
                            <img src="../../../img/iconoUser.png" alt="icono">
                            <ul>
                                <li>Nombre</li>
                                <li class="rol">Estudiante</li>
                            </ul>
                            <p><span class="rol">Asunto:</span><span class="mensaje_del_asunto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Doloremque hic iste labore, libero maxime mollitia obcaecati. Eius, repellendus
                                reprehenderit? A ab aspernatur delectus ducimus, est iusto minima molestias
                                    quidem voluptas.</span></p>
                        </div>
                        <div class="fecha_y_hora">
                            <ul>
                                <li>yyyy/mm/dd</li>
                                <li>hh:mm</li>
                            </ul>
                        </div>
                    </a>
                </li>

                <!--4 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php?seccion=solicitud_desplegada_pendiente_contenido_5">
                        <div class="arriba_mensaje">
                            <img src="../../../img/iconoUser.png" alt="icono">
                            <ul>
                                <li>Nombre</li>
                                <li class="rol">Estudiante</li>
                            </ul>
                            <p><span class="rol">Asunto:  </span><span class="mensaje_del_asunto"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Doloremque hic iste labore, libero maxime mollitia obcaecati. Eius, repellendus
                                reprehenderit? A ab aspernatur delectus ducimus, est iusto minima molestias
                                    quidem voluptas.</span></p>
                        </div>
                        <div class="fecha_y_hora">
                            <ul>
                                <li>yyyy/mm/dd</li>
                                <li>hh:mm</li>
                            </ul>
                        </div>
                    </a>
                </li>

                <!--5 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php?seccion=solicitud_desplegada_pendiente_contenido_6">
                        <div class="arriba_mensaje">
                            <img src="../../../img/iconoUser.png" alt="icono">
                            <ul>
                                <li>Nombre</li>
                                <li class="rol">Profesor</li>
                            </ul>
                            <p><span class="rol">Asunto:</span><span class="mensaje_del_asunto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Doloremque hic iste labore, libero maxime mollitia obcaecati. Eius, repellendus
                                reprehenderit? A ab aspernatur delectus ducimus, est iusto minima molestias
                                quidem voluptas.</span></p>
                        </div>
                        <div class="fecha_y_hora">
                            <ul>
                                <li>yyyy/mm/dd</li>
                                <li>hh:mm</li>
                            </ul>
                        </div>
                    </a>
                </li>

            </ol>
        </div>
    </div>
    <!-- fin de las 5 solicitudes mas recientes------------------------------------------------------------->
</main>

<!--footer-->
<?php include "../includes/footer_proa.php" ?>
<!--fin del footer-->
<script src="../../js/inicioPAS.js"></script>
</body>
</html>
