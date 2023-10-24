<?php

session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: bienvenido.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Login & Register</title>
</head>
<body>

<main id="registro">
    <div class="contenedor__todo">

        <div class="caja__trasera">

           <div class="caja__trasera-login">
              <h3> ¿Ya Tienes una Cuenta? </h3>
              <p>Inicia Sesion para entrar en la Página </p>
              <button id="btn__iniciar-sesion">Iniciar Sesion</button>
            </div>

            <div class="caja__trasera-register">
              <h3> ¿Aun No Tienes una Cuenta? </h3>
              <p>Registrate para que puedas Inicia Sesion</p>
              <button id="btn__registrarse">Registrarse</button>
            </div>

        </div>

        <!-- Formulario de Login y Registro -->

        <div class="contenedor__login-register">

        <!-- Formulario de Login-->
            <form action="login_usuario.php" method="POST" class="formulario__login">
                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Correo Electronico" name="email">
                <input type="password" placeholder="Contraseña" name="clave">
                <button type="submit">Entrar</button>
            </form>

         <!-- Formulario de Registro-->
            <form action = "registro_usuario.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre">
                <input type="text" placeholder="Correo Electronico" name="email">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="clave">
                <button>Registrarse</button>
            </form>

        </div>
    </div>


</main>

<script src="script.js"></script>
    
</body>
</html>