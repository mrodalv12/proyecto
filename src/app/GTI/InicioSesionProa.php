<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inicio de sesión PROA</title>
  <link rel="stylesheet" href="../../css/InicioSesionProa.css" />
</head>
<body>


<!-- Header -->
<?php include "../includes/headerGTIregistrado.php" ?>

  <main class="container">
    <section class="image-section">
      <img src="/img/Inicio_Sesion_Proa.png" alt="Login PROA" />
    </section>

    <section class="login-section">
      <h2>Inicia sesión en PROA</h2>
      <form id="loginForm">
        <label for="rolSeleccionado">Opciones de rol para PROA</label>
        <select id="rolSeleccionado" required>
          <option value="">Selecciona un rol</option>
          <option value="pas">Personal de Administración y Servicios</option>
          <option value="profesor">Profesor</option>
          <option value="alumno">Alumno</option>
        </select>

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" placeholder="Introduce tu correo electrónico" required autocomplete="email">

        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Introduce tu contraseña" required autocomplete="current-password"/>

        <button type="submit">Acceder</button>
        <div id="mensajeError" class="error"></div>
      </form>
    </section>
  </main>

<!-- Footer -->
<?php include "../includes/footerGTI.php" ?>

  <script src="../../js/InicioSesionProa.js"></script>
</body>
</html>