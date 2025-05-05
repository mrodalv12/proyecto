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
    <link rel="preload" href="../../css/inicioPAS.css" as="style" />
    <link rel="stylesheet" href="../../css/inicioPAS.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<body>
<!--encabezado-->
<?php include "../includes/header_proa.php" ?>
<!--fin del encabezado-->
<main class="contenido">

    <!--esto es el saludo-------------------------------------------------------------------------------->
    <div class="saludo">
        <div class="texto">
            <?php
            $hola = buenas();
            echo "<h1>$hola,<br> $userName</h1>";
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
                        <a href="Solicitudes_PAS.php">
                            <div class="arriba_mensaje">
                                <img src="../../../img/user.png" alt="icono">
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

                <!--1 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php">
                        <div class="arriba_mensaje">
                            <img src="../../../img/user.png" alt="icono">
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

                <!--1 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php">
                        <div class="arriba_mensaje">
                            <img src="../../../img/user.png" alt="icono">
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

                <!--1 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php">
                        <div class="arriba_mensaje">
                            <img src="../../../img/user.png" alt="icono">
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

                <!--1 solicitud-->
                <li class="item">
                    <a href="Solicitudes_PAS.php">
                        <div class="arriba_mensaje">
                            <img src="../../../img/user.png" alt="icono">
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
