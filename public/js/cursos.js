
function eliminarCookies() {
    document.cookie = 'recordar_usuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    document.cookie = 'recordar_contrasena=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}

function redirigir_cursos() {
window.location.href = "../controlador/curso_controlador.php?op=1";
}
function redirigir_areas() {
    window.location.href = "../controlador/area_Controlador.php?op=1";
}
function redirigir_login() {
window.location.href = "../controlador/usu_controlador.php?accion=navegar_a_login";

}
function abrirModal() {
var modal = document.getElementById('modalAgregarArea');
modal.style.display = 'block';
}

function cerrarModal() {
var modal = document.getElementById('modalAgregarArea');
modal.style.display = 'none';
}

function cargarD(){
    window.location.href = "../controlador/curso_Controlador.php?op=5";
}

function abrirEditar(button) {
    var modal = document.getElementById('modalEditarCurso');

    // Obtener los valores de los atributos de datos del botón
    var codigoCurso = button.getAttribute('data-codigo-curso');
    var codigoArea = button.getAttribute('data-codigo-area');
    var nombreCurso = button.getAttribute('data-nombre-curso');
    var grupoCurso = button.getAttribute('data-grupo-curso');
    var modoCurso = button.getAttribute('data-modo-curso');
    var diaCurso = button.getAttribute('data-dia-curso');
    var horaEntrada = button.getAttribute('data-hora-entrada');
    var horaSalida = button.getAttribute('data-hora-salida');
    var profesorApe = button.getAttribute('data-profesor-ape');
    var profesorNomb = button.getAttribute('data-profesor-nomb');

    // Rellenar los campos del modal con los valores
    document.getElementById('campo1').value = codigoCurso;
    document.getElementById('campo2').value = codigoArea;
    document.getElementById('campo3').value = nombreCurso;
    document.getElementById('campo4').value = grupoCurso;
    document.getElementById('campo5').value = modoCurso;
    document.getElementById('campo6').value = diaCurso;
    document.getElementById('campo7').value = horaEntrada;
    document.getElementById('campo8').value = horaSalida;
    document.getElementById('campo9').value = profesorApe;
    document.getElementById('campo10').value = profesorNomb;

    modal.style.display = 'block';
}


function cerrarEditar() {
var modal = document.getElementById('modalEditarCurso');
modal.style.display = 'none';
}