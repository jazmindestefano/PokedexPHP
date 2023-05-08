function validarFormularioDeRegistro() {

    const nombre = document.getElementById("nombre").value
    const email = document.getElementById("email").value
    const password = document.getElementById("password").value
    const confirmPassword = document.getElementById("confirm-password").value
    const errorDiv = document.getElementById("error-message-registro");

    if (nombre.trim() == "" || email.trim() == "" || password.trim() == "" || confirmPassword.trim() == "") {
        errorDiv.innerHTML = "<div class=error>Por favor, complet&aacute; todos los campos</<div>"
        return false
    } else {
        errorDiv.innerHTML = "";
        return true;
    }
}
