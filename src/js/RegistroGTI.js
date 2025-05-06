document.getElementById('registroForm').addEventListener('submit', function(e) {
    const contraseña = document.getElementById('contraseña').value;
    const confirmarContraseña = document.getElementById('confirmarContraseña').value;

    if (contraseña !== confirmarContraseña) {
        e.preventDefault();
        document.getElementById('error').style.display = 'block';
    }
});