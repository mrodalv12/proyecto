// Función para completar los datos del formulario según el rol
function completarDatos() {
    const rol = document.getElementById("rolSeleccionado").value;
    const inputCorreo = document.getElementById("correo");
    const inputContraseña = document.getElementById("contraseña");
    const mensajeError = document.getElementById("mensajeError");

    if (!rol) {
        inputCorreo.value = "";
        inputContraseña.value = "";
        mensajeError.textContent = "";
        return;
    }

    fetch(`/proyecto/app/includes/obtenerDatosRol.php?rol=${rol}`)
        .then(response => {
            if (!response.ok) throw new Error("Error en la petición");
            return response.json();
        })
        .then(data => {
            if (data.error) {
                mensajeError.textContent = data.error;
                inputCorreo.value = "";
                inputContraseña.value = "";
            } else {
                mensajeError.textContent = "";
                inputCorreo.value = data.correo;
                inputContraseña.value = data.contraseña;
            }
        })
        .catch(error => {
            mensajeError.textContent = "No se pudieron cargar los datos del rol.";
            inputCorreo.value = "";
            inputContraseña.value = "";
            console.error(error);
        });
}

document.getElementById("acceder").addEventListener("click", function(e) {
    e.preventDefault();

    const rol = document.getElementById("rolSeleccionado").value;
    const correo = document.getElementById("correo").value.trim();
    const contraseña = document.getElementById("contraseña").value.trim();

    if (!rol || !correo || !contraseña) {
        mostrarError("Por favor completa todos los campos.");
        return;
    }


    // Si todo está bien, redirige según el rol:
    switch (rol) {
        case "pas":
            window.location.href = "app/PROA/PAS/Inicio_PAS.php";
            break;
        case "profesor":
            window.location.href = "app/PROA/Inicio_Alumno.php";
            break;
        case "alumno":
            window.location.href = "app/PROA/Inicio_profesor.php";
            break;
        default:
            mostrarError("Rol desconocido.");
    }
});