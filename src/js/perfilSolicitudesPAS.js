document.addEventListener("DOMContentLoaded", () => {
    const btnEditar = document.getElementById("btn-editar");
    const mensajeDiv = document.getElementById("mensaje");
    let editMode = false;

    function mostrarMensaje(texto, tipo = "exito") {
        mensajeDiv.textContent = texto;
        mensajeDiv.className = `mensaje ${tipo} visible`;

        setTimeout(() => {
            mensajeDiv.classList.remove("visible");
            mensajeDiv.classList.add("oculto");
        }, 3000);
    }

    btnEditar.addEventListener("click", () => {
        if (!editMode) {
            // Cambiar los campos a inputs
            document.querySelectorAll(".info_item p, .item_asignatura p").forEach(p => {
                const value = p.textContent;
                const input = document.createElement("input");
                input.type = "text";
                input.value = value;
                input.className = "editable";
                p.replaceWith(input);
            });
            btnEditar.textContent = "Guardar";
            editMode = true;
        } else {
            // Validar campos
            const inputs = document.querySelectorAll(".editable");
            let valid = true;
            inputs.forEach(input => {
                if (input.value.trim() === "") {
                    valid = false;
                    input.style.border = "2px solid red";
                } else {
                    input.style.border = "1px solid #ccc";
                }
            });

            if (!valid) {
                mostrarMensaje("❌ Error: todos los campos deben estar rellenados.", "error");
                return;
            }

            // Cambiar inputs a <p> y mostrar mensaje de éxito
            inputs.forEach(input => {
                const p = document.createElement("p");
                p.textContent = input.value;
                p.className = input.className;
                input.replaceWith(p);
            });

            mostrarMensaje("✅ Datos modificados correctamente.", "exito");
            btnEditar.textContent = "Modificar";
            editMode = false;
        }
    });
});