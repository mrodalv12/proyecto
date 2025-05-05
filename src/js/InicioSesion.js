  /*function loginUsuario(event) {
    event.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    // Simular un login correcto (aquí debes poner tu propia validación)
    if (email === "minimv06@gmail.com" && password === "1234") {
      localStorage.setItem('logueado', 'true');
      window.location.href = 'landing2.html'; // tu landing especial
    } else {
      alert('Email o contraseña incorrectos');
    }
  }*/

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
          window.location.href = "C:\Users\minim\Documents\UNI1\PROYECTO\proyecto\src\app\GTI\Landing Page_Registrado\index.html";
        }, 2000);
      } else {
        document.getElementById('mensajeLogin').innerText = 'Email o contraseña incorrectos.';
      }
    });