<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="header">
    <a href="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\Landing Page_No registrado\index.html" class="logo">
      <span class="g">g</span><span class="ti">ti</span>
    </a>
      <nav class="nav">
        <a href="index.html#contacto">Contacto</a>
        <a href="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\PROA No registrado\index.html">PROA</a>
        <a href="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\Inicio Sesion GTI\index.html">Inicia sesión</a>
      </nav>
    </header>

  <main class="main-container">
    <section class="form-box">
      <h2>Crea una cuenta</h2>
      <form id="registroForm">
        <label>Nombre de usuario</label>
        <input type="text" id= "nombre" placeholder="Introduce tu nombre de usuario" required>

        <label>Correo electrónico</label>
        <input type="email" id="email" placeholder="Introduce tu correo electrónico" required>

        <label>Contraseña</label>
        <input type="password" id="password" placeholder="Introduce una contraseña" required>

        <label>Confirmación de contraseña</label>
        <input type="password" id= "confirmarPassword" placeholder="Vuelve a introducir la contraseña" required>

        <button type="submit">Crear cuenta</button>

        <p id="error" style="color: red; display: none;">Las contraseñas no coinciden.</p>

        <p id="mensajeRegistro"></p>
      </form>
      <p class="login-link">¿Ya tienes una cuenta? <a href="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\Inicio Sesion GTI\index.html">¡Inicia sesión!</a></p>
    </section>

   

    <section class="image-box">
      <img src="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\img\Inicio_Registro.png" alt="Registro">
    </section>
  </main>
  <footer>
    <div class="footer-container">
      <div class="footer-info">
        <p>📞 +34 972 98 10 20 | ✉️ gti@gtiempresas.com</p>
        <p>📍 C/ Nocedemora 20, Oviedo</p>
        <p><a href="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\Landing Page_No registrado\index.html#contacto">Contacto</a> | <a href="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\PROA No registrado\index.html">PROA</a></p>
      </div>
      <div class="footer-logo-block">
        <a href="C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\Landing Page_No registrado\index.html" class="logo">
          <span class="g">g</span><span class="ti">ti</span>
        </a>
        <p class="footer-copy">&copy; 2025 GTI. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>