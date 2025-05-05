if (!localStorage.getItem('usuariosPorRol')) {
  const datosIniciales = {
    pas: [
      { email: "o.breshe@upv.es", password: "1316390" },
      { email: "b.maltho@upv.es", password: "1970980" }
    ],
    profesor: [
      { email: "k.poumai@upv.es", password: "4525956" },
      { email: "l.prista@upv.es", password: "6055365" },
      { email: "e.mermiz@upv.es", password: "6738133" }
    ],
    alumno: [
      { email: "l.simdre@epsg.upv.es", password: "9218611" },
      { email: "m.kirkam@epsg.upv.es", password: "1320191" },
      { email: "d.rawabc@epsg.upv.es", password: "9971924" }
    ]
  };
  localStorage.setItem('usuariosPorRol', JSON.stringify(datosIniciales));
}

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registroForm");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // evitar recargar la página

    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const password1 = document.getElementById('password').value;
    const password2 = document.getElementById('confirmarPassword').value;

    // Validar contraseñas
    if (password1 !== password2) {
      document.getElementById('mensajeRegistro').innerText = 'Las contraseñas no coinciden.';
      document.getElementById('mensajeRegistro').style.color = 'red';
      return;
    }

    // Verificar si el correo ya está registrado
    const usuariosRegistrados = JSON.parse(localStorage.getItem('usuariosRegistrados')) || [];
    if (usuariosRegistrados.some(user => user.email === email)) {
      document.getElementById('mensajeRegistro').innerText = 'Este correo ya está registrado.';
      document.getElementById('mensajeRegistro').style.color = 'red';
      return;
    }

    // Cargar usuariosPorRol desde localStorage
    const usuariosPorRolRaw = localStorage.getItem('usuariosPorRol');
    if (!usuariosPorRolRaw) {
      document.getElementById('mensajeRegistro').innerText = 'No se encontraron cuentas disponibles.';
      document.getElementById('mensajeRegistro').style.color = 'red';
      return;
    }

    let usuariosPorRol = JSON.parse(usuariosPorRolRaw);

    // Validar que haya cuentas disponibles en todos los roles
    if (
      !Array.isArray(usuariosPorRol.profesor) || usuariosPorRol.profesor.length === 0 ||
      !Array.isArray(usuariosPorRol.alumno) || usuariosPorRol.alumno.length === 0 ||
      !Array.isArray(usuariosPorRol.pas) || usuariosPorRol.pas.length === 0
    ) {
      document.getElementById('mensajeRegistro').innerText = 'Ya no hay más cuentas disponibles para registro.';
      document.getElementById('mensajeRegistro').style.color = 'red';
      return;
    }

    // Asignar una cuenta de cada rol (usando shift())
    const cuentaProfesor = usuariosPorRol.profesor.shift();
    const cuentaAlumno = usuariosPorRol.alumno.shift();
    const cuentaPAS = usuariosPorRol.pas.shift();

    // Crear nuevo usuario
    const nuevoUsuario = {
      nombre,
      email,
      password: password1,
      roles: {
        profesor: { ...cuentaProfesor },
        alumno: { ...cuentaAlumno },
        pas: { ...cuentaPAS }
      }
    };

    // Guardar nuevo usuario
    usuariosRegistrados.push(nuevoUsuario);
    localStorage.setItem('usuariosRegistrados', JSON.stringify(usuariosRegistrados));

    // Actualizar usuariosPorRol con las cuentas restantes
    localStorage.setItem('usuariosPorRol', JSON.stringify(usuariosPorRol));

    // Mensaje de éxito
    document.getElementById('mensajeRegistro').innerText = '¡Registro exitoso!';
    
    // Redirigir
    setTimeout(() => {
      window.location.href = "C:/Users/minim/Documents/UNI1/PROYECTO/proyecto/src/app/GTI/Landing Page_Registrado/index.html";
    }, 2000);
  });
});