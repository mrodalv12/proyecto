// Simulación del JSON de usuarios PROA
const usuariosProa = {
    pas: [
        { id: "88-1316390", correo: "o.breshe@upv.es", contraseña: "1316390" },
        { id: "91-1970980", correo: "b.maltho@upv.es", contraseña: "1970980" },
    ],
    profesor: [
        { id: "60-4525956", correo: "k.poumai@upv.es", contraseña: "4525956" },
        { id: "64-6055365", correo: "l.prista@upv.es", contraseña: "6055365" },
    ],
    alumno: [
        { id: "01-9218611", correo: "l.simdre@epsg.upv.es", contraseña: "9218611" },
        { id: "04-1320191", correo: "m.kirkam@epsg.upv.es", contraseña: "1320191" },
    ],
};

// Asignaciones de usuarios PROA a usuarios registrados
const asignacionesProa = {
    Daniel: {
        pas: "88-1316390",
        profesor: "60-4525956",
        alumno: "01-9218611"
    },

    "José Luis": {
        pas: "91-1970980",
        profesor: "64-6055365",
        alumno: "04-1320191"
    }
};

// Función para completar los datos del formulario según el rol
function completarDatos() {
    const rol = document.getElementById("rolSeleccionado").value;
    const inputCorreo = document.getElementById("correo");
    const inputContraseña = document.getElementById("contraseña");

    const asignaciones = asignacionesProa[usuarioRegistradoActual];
    if (!asignaciones) {
        mostrarError("No tienes usuarios PROA asignados.");
        return;
    }

    const idAsignado = asignaciones[rol];
    if (!idAsignado) {
        mostrarError("No tienes este rol asignado.");
        return;
    }

    const usuario = usuariosProa[rol].find(u => u.id === idAsignado);
    if (usuario) {
        inputCorreo.value = usuario.correo;
        inputContraseña.value = usuario.contraseña;
        ocultarError();
    } else {
        mostrarError("Usuario PROA no encontrado.");
    }
}

function mostrarError(mensaje) {
    const divError = document.getElementById("mensajeError");
    divError.textContent = mensaje;
}

function ocultarError() {
    document.getElementById("mensajeError").textContent = "";
}


document.getElementById("acceder").addEventListener("click", function (e) {
    e.preventDefault(); // Evita que el enlace navegue automáticamente

    const rol = document.getElementById("rolSeleccionado").value;
    const correo = document.getElementById("correo").value.trim();
    const contraseña = document.getElementById("contraseña").value.trim();

    if (!rol || !correo || !contraseña) {
        mostrarError("Por favor completa todos los campos.");
        return;
    }

    const usuarios = usuariosProa[rol];
    if (!usuarios) {
        mostrarError("Rol no válido.");
        return;
    }

    const usuarioValido = usuarios.find(u => u.correo === correo && u.contraseña === contraseña);

    if (!usuarioValido) {
        mostrarError("Credenciales incorrectas.");
        return;
    }

    ocultarError();

    // Redirige según el rol
    switch (rol) {
        case "pas":
            window.location.href = "./src/app/PAS/Inicio_PAS.php";
            break;
        case "profesor":
            window.location.href = "./src/app/Profesor_Alumno/Inicio_Alumno-profesor.php";
            break;
        case "alumno":
            window.location.href = "./src/app/Profesor_Alumno/Inicio_Alumno-profesor.php";
            break;
        default:
            mostrarError("Rol desconocido.");
    }
});
