<?php 
 session_start();// la sesion se esta manteniendo activa

 require_once '../../dao/AreaDao.php';
 require_once '../../dao/CursoDao.php';
 require_once '../../util/ConexionBD.php';

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../../public/css/estilo_login.css">
    <!--Agregar BootStrap al proyecto (CSS)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <script>
        
    function mostrarinfo()
    {
        window.location.href = "../controlador/curso_controlador.php?op=1";      

    }
    </script>
    </head>

<body style="background-color: #FFF7E7;";>


    <!--Parte superior de la página -->
    <header>
        <div id="cabecera">
            <img src="../../public/img/logo-fisi.png" alt="Logo de la FISI">
            <h3>Mapa Interactivo de la FISI</h3>
             <!--<button><img src="../../public/img/usuario.png" alt="imagen">Acceder</button> -->  
        </div>
    </header>


     <!-- Login -->
     <div class="container_">
        <!--<form action="procesar_login.php" method="post">-->
        <div style="width: 100%; text-align: center;">
            <label style="font-size: 2rem;">Login</label> <br>
            <label style="font-size: 1.5rem;">Administración</label> <br>
        </div>
        
        <form action="../../dao/LoginDao.php" method="post">

            <img src="../../public/img/unmsm.png" alt="Imagen UNMSM">
            <div>
                <label for="usuario">Usuario:</label> <br>
                <input type="text" id="usuario" name="usuario" placeholder="Administrador" required>
            </div>
            <div>
                <label for="contrasena">Contraseña:</label> <br>
                <input type="password" id="contrasena" name="contrasena" placeholder="********"  required>
            </div>
            <div class="recor" style="width: 90%; text-align: center;">
                <input type="checkbox" id="recordar" name="recordar">
                <span for="recordar">Recordar cuenta</span>
            </div>
            <div>

            <input type="submit" value="Entrar" id="btn_enviar">
            <!--<input type="submit" value="Entrar" id="btn_enviar" >-->  
            <a href="frm_mapa.php" style="display:block" >Volver</a>
            </div>
        </form>
                
     </div>
     <script src="../../public/js/login.js"></script>

</body>
<footer>
    <div class="pie">
        Mapa Interactivo de la fisi
    </div>    
</footer>
<script type="text/javascript" src="../../public/js/mapa_config.js"></script> 


</html>