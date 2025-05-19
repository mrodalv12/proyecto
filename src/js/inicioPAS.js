function animacionSaludo(){
    const items = document.querySelectorAll('.item');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                items.forEach((item, i) => {
                    setTimeout(() => {
                        item.classList.add('visible');
                    }, i * 150); // 100ms entre cada uno
                });
                observer.disconnect(); // si solo quieres que se animen una vez
            }
        });
    }, {
        threshold: 0.1
    });

    items.forEach(item => observer.observe(item));
}
//-------------------------------------------------------------------------------------------------------
function colorRol() {
    const roles = document.querySelectorAll('.rol');

    roles.forEach((rol, i) => {
        const actual = rol.innerText.trim();
        const anterior = i > 0 ? roles[i - 1].innerText.trim() : "";

        if (actual === "Estudiante" || anterior === "Estudiante") {
            rol.style.color = "#4C5477";
        }
        if (actual === "Profesor" || anterior === "Profesor" ){
            rol.style.color = "#A15461";
        }
    });
}
//-------------------------------------------------------------------------------------------------------
function largoMensajeAsunto(callback){
    const texto = document.querySelectorAll(".mensaje_del_asunto");

    texto.forEach(parrafo =>{
        const asunto = parrafo.innerText;
        if (asunto.length > 50){
            parrafo.innerText = asunto.slice(0,50) + "[...]";
        }
    })
}
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------
animacionSaludo();
colorRol()
largoMensajeAsunto()