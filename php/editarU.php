
<?php
$conexion = mysqli_connect("localhost", "root", "");
$bd = mysqli_select_db($conexion, 'clientes');
if (isset($_POST['edituser'])) {
    $id=$_POST['editid'];
    $nombre = trim($_POST["Nombre"]);
    $correo = trim($_POST["email"]);
    $consulta = "SELECT * FROM usuarios WHERE correo='$correo';"; 
   
    $resultado = mysqli_query($conexion, $consulta);
    $resultado2 = mysqli_fetch_array($resultado);
    if (trim($_POST["password"]) == trim($_POST["password2"])) {
        
    
        if($_POST["password"]!=$resultado2['contrasena']){
        $opciones = ['cost' => 12,];
        $contrasena = password_hash($_POST["password"], PASSWORD_BCRYPT, $opciones);
        $rol = $_POST['rol_edit'];
        $sql = "UPDATE usuarios SET nombre='$nombre',correo='$correo',contrasena='$contrasena',rol='$rol' WHERE id='$id' ";
        $query_run  = mysqli_query($conexion, $sql);
        if ($query_run) {
            echo '<script>alert("Datos Guardados");</script>';
            header('Location: ../dash/usuarios.php');
        } else {
            echo '<script>alert("Error Revise los datos ingresados");
      
        </script>';
        }
    }else{
        $contrasena=$_POST['password'];
        $rol = $_POST['rol_edit'];
        $sql = "UPDATE usuarios SET nombre='$nombre',correo='$correo',contrasena='$contrasena',rol='$rol' WHERE id='$id' ";
        $query_run  = mysqli_query($conexion, $sql);
        if ($query_run) {
            echo '<script>alert("Datos Guardados");</script>';
            header('Location: ../dash/usuarios.php');
        } else {
            echo '<script>alert("Error Revise los datos ingresados");
      
        </script>';
        }
    }
    }
}
mysqli_close($conexion);

?>