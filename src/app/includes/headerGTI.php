<!--ignoren los enlaces resaltados en amarillo, eso es asi-->

<header class="header">

    <!--aqui va el logo-->
    <a href="index.php" class="logo">
        <span class="g">g</span><span class="ti">ti</span>
    </a>
    <!--fin del logo-->
    <!--aqui van los links para moverse entre paginas-->
    <nav class="nav">
        <ul>
            <li><a href="index.php#contacto">Contacto</a></li>
            <li><a href="PROA.php">PROA</a></li>

            <?php if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])): ?>
                <!-- Si el usuario está logueado -->
                <li class="mi-cuenta">
                    <button id="btnCuenta">Mi cuenta ▼</button>
                    <div class="menu-cuenta" id="menuCuenta">
                        <a href="./src/app/includes/cerrarSesion.php">Cerrar sesión</a> <!-- Redirigir a logout.php para cerrar sesión -->
                    </div>
                    </li>
            <?php else: ?>
                <!-- Si el usuario no está logueado -->
                <li><a href="InicioSesion.php">Inicia sesión</a></li>

            <?php endif; ?>
        </ul>
    </nav>
    <!--fin de los links para moverse entre paginas-->
</header>