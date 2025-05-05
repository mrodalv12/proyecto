      document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar recargar la página
    
      const emailLogin = document.getElementById('email').value;
      const passwordLogin = document.getElementById('password').value;
    
      // Recuperar la lista de usuarios registrados
      const usuarios = JSON.parse(localStorage.getItem('usuariosRegistrados')) || [];
    
      // Buscar si existe un usuario con ese email y contraseña
      const usuario = usuarios.find(user => user.email === emailLogin && user.password === passwordLogin);
    
      if (usuario) {
        document.getElementById('mensajeLogin').innerText = '¡Login exitoso! Bienvenido, ' + usuario.nombre;
    
        setTimeout(() => {
          window.location.href = "../GTI/LandingPage_Registrado.php";
        }, 2000);
      } else {
        document.getElementById('mensajeLogin').innerText = 'Email o contraseña incorrectos.';
      }
    });