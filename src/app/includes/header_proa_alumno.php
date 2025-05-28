<?php
session_start();
//?>
<!----------------------------------------------------------------------------------------------------------->
<header class="encabezado">
    <!-- Logo -->
    <a href="../Profesor_Alumno/Inicio_Alumno.php" class="logo">
        <img src="../../../img/logoPROA.png" alt="proa" />
    </a>
    <!----------------------------------------------------------------------------------------------------------->
    <!-- Menú de navegación -->
    <nav class="cosas_del_header">
        <ul>
            <li><a href="../Profesor_Alumno/asignaturas_Alumno.php">Asignaturas</a></li>
            <!--            <li><a href="../Profesor_Alumno/calendario.php">Calendario</a></li>-->
        </ul>
    </nav>
    <nav class="MOVIL_cosas_del_header">
        <ul>
            <li class="enlaces"><a href="../Profesor_Alumno/asignaturas_Alumno.php"><img src="../../../img/iconoAsignaturas.png" alt="Asignaruras"></a></li>
            <!--            <li class="enlaces"><a href="../Profesor_Alumno/calendario.php"><img src="../../../img/iconoCalendario.png" alt="Calendario"></a></li>-->
        </ul>
    </nav>
    <div class="perfil_notificaciones_pas">
        <ul>
            <li class="nombre_de_usuario">
                <a href="#"><?php echo htmlspecialchars($_SESSION['usuario_proa']['Nombre']); ?></a>
                <ul>
                    <li><?php echo htmlspecialchars($_SESSION['usuario_proa']['Nombre']); ?></li>
                    <li><?php echo htmlspecialchars($_SESSION['usuario_proa']['Correo']); ?></li>
                    <li><?php echo htmlspecialchars($_SESSION['usuario_proa']['Rol']); ?></li>
                    <li><a href="../includes/cerrarSesion.php">Cerrar sesión</a></li>
                </ul>
            </li>
            <li><a href="#"><img src="../../../img/iconoCampana.png" alt="campanita" class="notificaciones"/></a></li>
        </ul>
    </div>

    <!----------------------------------------------------------------------------------------------------------->
</header>
<!----------------------------------------------------------------------------------------------------------->
<!------>