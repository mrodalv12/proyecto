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
            <!-- Usuario logueado -->
            <li class="mi-cuenta">
                <button id="btnCuenta">
                    <?= htmlspecialchars($_SESSION["usuario"]["nombre"]) ?> ▼
                </button>
                <div class="menu-cuenta" id="menuCuenta">
                    <p><?= htmlspecialchars($_SESSION["usuario"]["email"]) ?></p>
                    <a href="app/handlers/cerrarSesion.php">Cerrar sesión</a>
                </div>
            </li>
        <?php else: ?>
            <!-- No logueado -->
            <li><a href="InicioSesionGTI.php">Inicia sesión</a></li>
        </ul>
        <?php endif; ?>
    </nav>
    <!--fin de los links para moverse entre paginas-->
</header>