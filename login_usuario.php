<?php 
session_start();

include("conexion_bd.php");

$email = $_POST['email'];
$clave = $_POST['clave'];
$clave = hash('sha512', $clave);

$validar_login = mysqli_query($conexion , "SELECT * FROM Usuarios WHERE email='$email' and clave='$clave'");

if(mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $clave;
    header ("location: bienvenido.php");
    exit;
    
}else{
    echo '<script>
    alert("Usuario No Existe, Porfavor Verifique los datos introducidos");
    window.location = "index.php";
    </script>';
    exit;
};

?>