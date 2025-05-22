let archivosSeleccionados = [];

document.getElementById("archivo-upload").addEventListener("change", function () {
    archivosSeleccionados = Array.from(this.files);
    document.getElementById("mensaje-error").style.display = "none"; // ocultar error si elige algo
    mostrarArchivos();
});

function mostrarArchivos() {
    const display = document.getElementById("archivo-display");
    const contador = document.getElementById("contador-archivos");
    display.innerHTML = "";

    archivosSeleccionados.forEach((file) => {
        const div = document.createElement("div");
        div.className = "archivo-item";

        const nombre = document.createElement("span");
        nombre.textContent = file.name;

        const btnEliminar = document.createElement("button");
        btnEliminar.textContent = "✖";
        btnEliminar.className = "btn-eliminar";

        btnEliminar.onclick = () => {
            archivosSeleccionados = archivosSeleccionados.filter(
                (f) => f.name !== file.name
            );
            mostrarArchivos();
        };

        div.appendChild(nombre);
        div.appendChild(btnEliminar);
        display.appendChild(div);
    });

    contador.textContent = archivosSeleccionados.length > 0
        ? `${archivosSeleccionados.length} archivo(s) seleccionados`
        : "";
}

function enviarArchivos() {
    const mensajeError = document.getElementById("mensaje-error");
    const mensajeEnviado = document.getElementById("mensaje-enviado");

    if (archivosSeleccionados.length === 0) {
        mensajeError.style.display = "block";
        mensajeEnviado.style.display = "none";
        return;
    }

    // Ocultamos mensaje de error y mostramos éxito
    mensajeError.style.display = "none";
    mensajeEnviado.style.display = "block";

    setTimeout(() => {
        document.getElementById("archivo-upload").value = "";
        archivosSeleccionados = [];
        document.getElementById("archivo-display").innerHTML = "";
        document.getElementById("contador-archivos").textContent = "";
        mensajeEnviado.style.display = "none";
    }, 3000);
}