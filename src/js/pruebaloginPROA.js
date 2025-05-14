// Simulación del JSON de usuarios PROA
const usuariosProa = {
    pas: [
        { id: "pas1", correo: "pas1@proa.com", contraseña: "pass123" },
        { id: "pas2", correo: "pas2@proa.com", contraseña: "pass456" },
    ],
    profesor: [
        { id: "prof1", correo: "prof1@proa.com", contraseña: "prof123" },
        { id: "prof2", correo: "prof2@proa.com", contraseña: "prof456" },
    ],
    alumno: [
        { id: "alum1", correo: "alum1@proa.com", contraseña: "alum123" },
        { id: "alum2", correo: "alum2@proa.com", contraseña: "alum456" },
    ],
};

// Asignaciones de usuarios PROA a usuarios registrados
const asignacionesProa = {
    Minerva: {
        pas: "pas1",
        profesor: "prof1",
        alumno: "alum1"
    },
    nerva: {
        pas: "pas2",
        profesor: "prof2",
        alumno: "alum2"
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