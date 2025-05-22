function agregarTarea(event) {
    event.preventDefault(); // Evita que recargue la página

    const datos = {
        titulo: document.getElementById("titulo").value,
        fecha: document.getElementById("fecha").value,
        descripcion: document.getElementById("descripcion").value,
        instrucciones: document.getElementById("instrucciones").value,
        //id_profesor: 1 // Aquí deberías poner el ID real del profesor logueado
    };

    fetch("/proyecto/app/handlers/PROA_profesor/agregarTareas.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(datos),
    })
        .then(response => response.text())
        .then(text => {
            console.log("Respuesta cruda:", text);
            // Si quieres intentar parsear JSON después:
            try {
                const data = JSON.parse(text);
                document.getElementById("mensaje").textContent = data.mensaje;
            } catch(e) {
                document.getElementById("mensaje").textContent = "Respuesta no es JSON válido.";
                console.error("Error JSON:", e);
            }
        })
        .then(data => {
            if (data && data.mensaje) {
                document.getElementById("mensaje").textContent = data.mensaje;
            } else {
                document.getElementById("mensaje").textContent = "Respuesta inesperada del servidor.";
                console.error("Respuesta no tiene propiedad 'mensaje':", data);
            }
        })
        .catch(error => {
            document.getElementById("mensaje").textContent = "Error al guardar la tarea.";
            console.error("Error:", error);
        });
}