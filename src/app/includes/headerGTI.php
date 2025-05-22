<header class="header">
    <a href="index.php" class="logo">
        <span class="g">g</span><span class="ti">ti</span>
    </a>
    <nav class="nav">
        <a href="index.php#contacto">Contacto</a>
        <a href="PROA.php">PROA</a>

        <?php if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])): ?>
            <!-- Usuario logueado -->
            <div class="mi-cuenta">
                <button id="btnCuenta">
                    <?= htmlspecialchars($_SESSION["usuario"]["nombre"]) ?> ▼
                </button>
                <div class="menu-cuenta" id="menuCuenta">
                    <p><?= htmlspecialchars($_SESSION["usuario"]["email"]) ?></p>
                    <a href="app/handlers/cerrarSesion.php">Cerrar sesión</a>
                </div>
            </div>
        <?php else: ?>
            <!-- No logueado -->
            <a href="InicioSesionGTI.php">Inicia sesión</a>
        <?php endif; ?>
    </nav>
</header>