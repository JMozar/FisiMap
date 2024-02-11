// Verifica las cookies al cargar la página
window.onload = function () {
    var recordarUsuario = getCookie('recordar_usuario');
    var recordarContrasena = getCookie('recordar_contrasena');
        
    if (recordarUsuario && recordarContrasena) {
        // Redirige automáticamente al usuario a la página protegida
        window.location.href = "../controlador/curso_controlador.php?op=1";
    }
}

// Función para obtener el valor de una cookie
function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}
