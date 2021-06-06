<?php
$conexion = mysqli_connect("localhost","root","");
$bd=mysqli_select_db($conexion,'clientes');
if (isset($_POST['deletebt2'])) {
    $id = $_POST['id'];

    $query="DELETE FROM usuarios WHERE id='$id' ";
    $query_run=mysqli_query($conexion,$query);

    if($query_run){
        echo '<script>alert("Datos Borrados");</script>';
        header('Location: ../dash/usuarios.php');

    }else{
        echo '<script>alert("Error datos no borrados");
        location.href ="../dash/usuarios.php";
        </script>';
        
    }
}
mysqli_close($conexion);

?>