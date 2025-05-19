const form = document.getElementById("materia");
const icono = document.getElementById("iconoBuscar");

icono.addEventListener("click", () => {
    form.requestSubmit(); // Envía el formulario
});