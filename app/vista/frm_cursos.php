<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/estilo_curso.css">
    <script>
        function redirigir_login() {
        window.location.href = "../vista/frm_login.php";

        }
    </script>
</head>
<body>
    <!--Parte superior de la página -->
    <header>
        <div id="cabecera">
            <img src="../../public/img/logo-fisi.png" alt="Logo de la FISI">
            <h3>Mapa Interactivo de la FISI</h3>
            <button onclick="redirigir_login()"><img src="../../public/img/usuario.png" alt="imagen">Salir</button>   
        </div>
    </header>
</body>
</html>