<?php

session_start();

if (!isset($_SESSION['usuario'])){
    echo'
    
    <script>
    alert("Por favor debes Iniciar Sesion");
    window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Portal</title>
</head>
<body>

<h1>Bienvenido a Mi Mundo</h1>
<a href="cerrar_session.php"> Cerrar Session</a>
</body>
</html>