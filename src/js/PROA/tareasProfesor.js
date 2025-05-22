// popupEliminar.js

let filaAEliminar = null;

document.querySelectorAll(".erase-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
        e.preventDefault();
        filaAEliminar = this.closest("tr");
        document.getElementById("popup").style.display = "flex";
    });
});

function cerrarPopup() {
    document.getElementById("popup").style.display = "none";
    filaAEliminar = null;
}

function confirmarEliminacion() {
    if (filaAEliminar) {
        filaAEliminar.remove();

        const mensaje = document.getElementById("mensaje");
        mensaje.textContent = "Tarea eliminada correctamente.";
        mensaje.style.display = "block";

        setTimeout(() => {
            mensaje.style.display = "none";
        }, 3000);
    }
    cerrarPopup();
}