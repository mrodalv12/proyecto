<?php
include "datos_usuario.php";
?>
<!----------------------------------------------------------------------------------------------------------->
<header class="encabezado">
    <!-- Logo -->
        <a href="../PAS/Inicio_PAS.php" class="logo">
            <img src="../../../img/logoPROA.png" alt="proa" />
        </a>
    <!----------------------------------------------------------------------------------------------------------->
    <!-- Menú de navegación -->
    <nav class="cosas_del_header">
        <ul>
                <li class="enlaces_pas"><a href="../PAS/Solicitudes_PAS.php?esto=boton1pendientes">Solicitudes</a></li>
        </ul>
    </nav>
    <div class="perfil_notificaciones_pas">
        <ul>
            <li class="nombre_de_usuario">
                <a href="#">User</a>
                <ul>
                    <li>usuario</li>
                    <li>correo</li>
                    <li>rol</li>
                    <li><a href="../../InicioSesionProa.php">Cerrar sesión</a></li>
                </ul>
            </li>
            <li><a href="#"><img src="../../../img/iconoCampana.png" alt="campanita" class="notificaciones"/></a></li>
        </ul>
    </div>

    <!----------------------------------------------------------------------------------------------------------->
</header>
<!----------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------