<?php

include 'conexion_bd.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = $_POST['clave'];

$password = hash('sha512', $password);

$query = "INSERT INTO `Usuarios`(nombre, email, usuario, clave) 
          VALUES('$nombre', '$email', '$usuario', '$password')";

     

//verificar que el correo no se repita en la base de datos

$verificar_correo = mysqli_query($conexion, "SELECT * FROM Usuarios WHERE email='$email' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location = "index.php";
    
    </script>
    ';
    exit();
}

//verificar que el nombre de usuario no se repita en la base de datos 

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM Usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
    alert("Este usuario ya esta registrado, intenta con otro diferente");
    window.location = "index.php";
    
    </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);   


if($ejecutar){
    echo'
    <script>
    alert("Usuario Registrado Exitosamente");
    window.location = "index.php";
    </script>
    ';
}else{
    echo '
    <script>
    alert("intentalo de nuevo, usuario no almacendado");
    window.location = "index.php";
    </script>
    ';
};     



mysqli_close($conexion);

?>
