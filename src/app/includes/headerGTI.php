<header class="header">
    <a href="../GTI/index.php" class="logo">
        <span class="g">g</span><span class="ti">ti</span>
    </a>
    <nav class="nav">
        <a href="../GTI/index.php#contacto">Contacto</a>
        <a href="../GTI/PROA.php">PROA</a>

        <?php if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])): ?>
            <!-- Si el usuario está logueado -->
            <div class="mi-cuenta">
                <button id="btnCuenta">Mi cuenta ▼</button>
                <div class="menu-cuenta" id="menuCuenta">
                    <a href="../includes/cerrarSesion.php">Cerrar sesión</a> <!-- Redirigir a logout.php para cerrar sesión -->
                </div>
            </div>
        <?php else: ?>
            <!-- Si el usuario no está logueado -->
                    <a href="../GTI/InicioSesion.php">Inicia sesión</a>

        <?php endif; ?>

    </nav>
</header>