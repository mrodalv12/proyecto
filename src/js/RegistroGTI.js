document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registroForm");
    const mensajeDiv = document.getElementById("mensajeRegistro");

    function mostrarMensaje(texto, tipo = "exito") {
        mensajeDiv.textContent = texto;
        mensajeDiv.style.position = "fixed";
        mensajeDiv.style.top = "10px";
        mensajeDiv.style.right = "10px";
        mensajeDiv.style.padding = "10px 20px";
        mensajeDiv.style.borderRadius = "5px";
        mensajeDiv.style.zIndex = "9999";
        mensajeDiv.style.color = "white";
        mensajeDiv.style.backgroundColor = tipo === "exito" ? "green" : "red";
        mensajeDiv.style.boxShadow = "0 0 10px rgba(0,0,0,0.3)";
        mensajeDiv.style.fontWeight = "bold";
        mensajeDiv.style.display = "block";

        setTimeout(() => {
            mensajeDiv.style.display = "none";
            mensajeDiv.textContent = "";
        }, 3000);
    }

    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const usuario = form.usuario.value.trim();
        const correo = form.correo.value.trim();
        const contraseña = form.contraseña.value.trim();
        const confirmarContraseña = form.confirmarContraseña.value.trim();

        if (!usuario || !correo || !contraseña || !confirmarContraseña) {
            mostrarMensaje("❌ No se ha podido registrar al usuario. Por favor rellena todos los campos.", "error");
            return false;
        }

        if (contraseña !== confirmarContraseña) {
            mostrarMensaje("❌ Las contraseñas no coinciden.", "error");
            return false;
        }

        form.submit();
    });
});


