<?php
$conexion = mysqli_connect("localhost","root","");
$bd=mysqli_select_db($conexion,'clientes');
if (isset($_POST['deletebtn'])) {
    $cedula = $_POST['cc'];

    $query="DELETE FROM contactos WHERE cedula='$cedula' ";
    $query_run=mysqli_query($conexion,$query);

    if($query_run){
        echo '<script>alert("Datos Borrados");</script>';
        header('Location: ../dash/contactos.php');

    }else{
        echo '<script>alert("Error datos no borrados");
        location.href ="../dash/contactos.php";
        </script>';
        
    }
}
mysqli_close($conexion);

?>
