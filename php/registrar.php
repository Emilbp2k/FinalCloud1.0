<?php
require 'base_de_datos.php';
session_start();
$usuario=$_SESSION['usuario'];
if (isset($_POST["boton_register"])) {
$nombre = trim($_POST["Nombre"]);
$correo = trim($_POST["email"]);

if(trim($_POST["password"]) == trim($_POST["password2"])){
    $opciones=['cost' => 12,];
    $contrasena = password_hash($_POST["password"],PASSWORD_BCRYPT,$opciones);
    $rol=$_POST['rol'];
    $sql = "INSERT INTO usuarios VALUES (NULL, '$nombre','$correo','$contrasena','$rol');";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        if($usuario!=null){
            header("Location: ../dash/usuarios.php");
        }else{
            header("Location: ../index.php");
        }
       

    } else {
        echo '<h3 class="bad">Usuario ya resgistrado</h3>';
    }
}
mysqli_close($conexion);
}


?>