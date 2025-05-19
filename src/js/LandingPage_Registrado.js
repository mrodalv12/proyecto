function enviarFormulario(event) {
    event.preventDefault();

    const correo = document.getElementById("correo").value.trim();
    const asunto = document.getElementById("asunto").value.trim();
    const descripcion = document.getElementById("mensaje").value.trim();

    const mensajeDiv = document.getElementById("mensajeAviso");

    //Comprueba si está todo completado o no
    if (correo !== "" && asunto !== "" && descripcion !== "") {
        mensajeDiv.textContent = "✅ La consulta se ha enviado con éxito.";
        mensajeDiv.className = "mensaje exito visible";
    } else {
        mensajeDiv.textContent = "❌ No se ha podido enviar la consulta.";
        mensajeDiv.className = "mensaje error visible";
    }

    // Ocultar después de 3 segundos
    setTimeout(() => {
        mensajeDiv.classList.remove("visible");
    }, 3000);

    return false;
}