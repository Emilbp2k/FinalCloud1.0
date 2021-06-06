<?php
$conexion = mysqli_connect("localhost","root","");
$bd=mysqli_select_db($conexion,'clientes');
if (isset($_POST['edit'])) {
    $cedula = $_POST['cc'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fnacimiento = $_POST['f_nacimiento'];
    $telefono = $_POST['tel'];
    $direccion = $_POST['dir'];

      

    function busca_edad($fecha_nacimiento){
        $dia=date("d");
        $mes=date("m");
        $ano=date("Y");
        
        
        $dianaz=date("d",strtotime($fecha_nacimiento));
        $mesnaz=date("m",strtotime($fecha_nacimiento));
        $anonaz=date("Y",strtotime($fecha_nacimiento));
        
        
        //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
        
        if (($mesnaz == $mes) && ($dianaz > $dia)) {
        $ano=($ano-1); }
        
        //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
        
        if ($mesnaz > $mes) {
        $ano=($ano-1);}
        
         //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
        
        $edad=($ano-$anonaz);
        
        
        return $edad;
        
        
        }
      $edad=busca_edad($fnacimiento);

    $query="UPDATE contactos SET nombre='$nombre',apellidos='$apellidos',
    fecha_nacimiento='$fnacimiento',telefono='$telefono',direccion='$direccion',edad='$edad' WHERE cedula='$cedula' ";
    $query_run=mysqli_query($conexion,$query);

    if($query_run){
        echo '<script>alert("Datos Guardados");</script>';
        header('Location: ../dash/contactos.php');

    }else{
        echo '<script>alert("Error Revise los datos ingresados");
        location.href ="../dash/contactos.php";
        </script>';
        
    }
}
mysqli_close($conexion);

?>
