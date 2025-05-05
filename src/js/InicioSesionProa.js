document.getElementById('btnCuenta').addEventListener('click', function() {
  const menu = document.getElementById('menuCuenta');
  menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});

// Opcional: cerrar el menú si se hace click fuera
window.addEventListener('click', function(event) {
  if (!event.target.matches('#btnCuenta')) {
    const menu = document.getElementById('menuCuenta');
    if (menu.style.display === 'block') {
      menu.style.display = 'none';
    }
  }
});






document.addEventListener("DOMContentLoaded", function () {
  const selectRol = document.getElementById('rolSeleccionado');
  const inputEmail = document.getElementById('email');
  const inputPassword = document.getElementById('password');
  const loginForm = document.getElementById('loginForm');
  const mensajeLogin = document.getElementById('mensajeError');

  // Cargar usuarios desde localStorage
  const usuariosRegistrados = JSON.parse(localStorage.getItem('usuariosRegistrados')) || [];

  // Guardamos aquí al usuario que coincida durante el login
  let usuarioAutenticado = null;


  
  // 1. Autocompletar email/contraseña según rol seleccionado
  if (selectRol && inputEmail && inputPassword) {
    selectRol.addEventListener('change', function () {
      const rolSeleccionado = selectRol.value;

      // Limpiar campos si no hay rol seleccionado
      if (!rolSeleccionado) {
        inputEmail.value = '';
        inputPassword.value = '';
        return;
      }

      const usuarioLogueado = JSON.parse(localStorage.getItem("usuariosRegistrados"));

      for(let i=0; i<usuariosRegistrados.length;i++){
        if(usuarioLogueado === usuariosRegistrados[i]){
          usuarioEncontrado=usuarioLogueado.find(usuario =>
            usuario.roles && usuario.roles[rolSeleccionado]
          )
        }
      }

      // Buscar el primer usuario que tenga ese rol
      const usuarioEncontrado = usuarioLogueado.find(usuario =>
        usuario.roles && usuario.roles[rolSeleccionado]
      );

      /*const emailUsuarioLogueado = localStorage.getItem('usuarioLogeadoEmail');
      const usuariosRegistrados = JSON.parse(localStorage.getItem('usuariosRegistrados')) || [];
    
      console.log("emailUsuarioLogueado:", emailUsuarioLogueado);
      console.log("usuariosRegistrados:", usuariosRegistrados);
    
      const usuarioEncontrado = usuariosRegistrados.find(usuario => {
        const coincideEmail = usuario.email?.trim().toLowerCase() === emailUsuarioLogueado?.trim().toLowerCase();
        const tieneRol = usuario.roles && usuario.roles[rolSeleccionado];
    
        console.log("Comparando:", {
          emailUsuario: usuario.email,
          emailGuardado: emailUsuarioLogueado,
          coincide: coincideEmail,
          tieneRol: !!tieneRol
        });
    
        return coincideEmail && tieneRol;
      });*/
      if (usuarioEncontrado) {
        const datosRol = usuarioEncontrado.roles[rolSeleccionado];
        inputEmail.value = datosRol.email;
        inputPassword.value = datosRol.password;
        usuarioAutenticado = usuarioEncontrado; // Guardamos el usuario encontrado
      } else {
        inputEmail.value = '';
        inputPassword.value = '';
        usuarioAutenticado = null;
      }
    });
  }

  // 2. Manejar el envío del formulario
  document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    const inputEmail = document.getElementById("email").value.trim();
    const inputPassword = document.getElementById("password").value;
    const mensajeLogin = document.getElementById("mensajeError");
  
    const usuariosRegistrados = JSON.parse(localStorage.getItem("usuariosRegistrados")) || [];
  
    // Buscar si las credenciales coinciden con algún rol
    const usuarioGuardado = usuariosRegistrados.find(user =>
      user.roles &&
      Object.values(user.roles).some(rol => 
        rol.email === inputEmail && rol.password === inputPassword
      )
    );
  
    if (usuarioGuardado) {
      mensajeLogin.innerText = "¡Login exitoso! Bienvenido";
      mensajeLogin.style.color = "green";
  
      // Guardar usuario y email del rol
      localStorage.setItem("usuarioLogeado", JSON.stringify(usuarioGuardado));
      localStorage.setItem("usuarioLogeadoEmail", inputEmail); // ✅ Lo faltante
  
      setTimeout(() => {
        window.location.href = "loginproa.html"; // o landing2.html
      }, 2000);
    } else {
      mensajeLogin.innerText = "Email o contraseña incorrectos.";
      mensajeLogin.style.color = "red";
    }
  });
});