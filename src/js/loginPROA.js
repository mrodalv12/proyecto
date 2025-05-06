function completarDatos() {
    // Obtiene el valor del rol seleccionado
    const rol = document.getElementById("rolSeleccionado").value;

    // Enviar el rol al servidor para obtener los datos del usuario registrado
    if (rol !== "") {
        // Realizamos una solicitud GET para obtener los datos del usuario
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '../includes/obtener_datos_usuario.php?rol=' + rol, true);

        // Manejo de la respuesta de la solicitud
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log("Respuesta del servidor:", xhr.responseText); // Depuración de la respuesta
                const datosUsuario = JSON.parse(xhr.responseText);

                if (datosUsuario && datosUsuario.email && datosUsuario.password) {
                    // Completar los campos si los datos están disponibles
                    document.getElementById("correo").value = datosUsuario.email;
                    document.getElementById("contraseña").value = datosUsuario.password;
                } else {
                    alert("No se encontraron datos para el rol seleccionado.");
                }
            } else {
                alert("Error al obtener los datos del usuario. Estado HTTP: " + xhr.status);
            }
        };

        xhr.onerror = function() {
            console.error("Error en la solicitud AJAX.");
            alert("Hubo un problema con la solicitud.");
        };

        xhr.send(); // No es necesario enviar el rol en el cuerpo de la solicitud con GET
    } else {
        // Limpiar los campos si no se seleccionó ningún rol
        document.getElementById("correo").value = "";
        document.getElementById("contraseña").value = "";
    }
}