<?php require_once "vistas/parte_superior.php" ?>

<?php
include_once '../php/base_de_datos.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT * FROM contactos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Modal Agregar -->
<div class="modal fade" id="agregar-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/ingresarC.php" method="POST">
                <div class="modal-body">

                    <div class="form-group">

                        <label>Cedula</label>
                        <input type="text" name="cc" class="form-control" placeholder="Ingrese La Cedula" required pattern="[0-9]+" />

                    </div>
                    <div class="form-group">

                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese El Nombre" required pattern="[A-Z a-z]+">

                    </div>
                    <div class="form-group">

                        <label>Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" placeholder="Ingrese El Apellido" required pattern="[A-Z a-z]+">

                    </div>
                    <div class="form-group">

                        <label>Fecha De Nacimiento</label>
                        <input type="date" name="f_nacimiento" class="form-control" required>

                    </div>

                    <div class="form-group">

                        <label>Telefono</label>
                        <input type="text" name="tel" class="form-control" placeholder="Ingrese el Telefono" required pattern="[0-9]+">

                    </div>
                    <div class="form-group">

                        <label>Direccion</label>
                        <input type="text" name="dir" class="form-control" placeholder="Ingrese La Direccion" required pattern="[a-zA-Z0-9#.- ]+">

                    </div>
                

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ###################################################################################################################################################################################################################################### -->
<!-- Modal Editar -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/editarC.php" method="POST">

                <div class="modal-body">



                    <input type="hidden" name="cc" class="form-control" id="ccedit" />


                    <div class="form-group">

                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombreedit" placeholder="Ingrese El Nombre" required pattern="[A-Z a-z]+">

                    </div>
                    <div class="form-group">

                        <label>Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" id="apellidosedit" placeholder="Ingrese El Apellido" required pattern="[A-Z a-z]+">

                    </div>
                    <div class="form-group">

                        <label>Fecha De Nacimiento</label>
                        <input type="date" name="f_nacimiento" id="fechaedit" class="form-control" required>

                    </div>
                    <div class="form-group">

                        <label>Telefono</label>
                        <input type="text" name="tel" class="form-control" id="teledit" placeholder="Ingrese el Telefono" required pattern="[0-9]+">

                    </div>
                    <div class=" form-group">

                        <label>Direccion</label>
                        <input type="text" name="dir" class="form-control" id="diredit" placeholder="Ingrese La Direccion" required pattern="[a-zA-Z0-9#.- ]+">

                    </div>
                  


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="edit" class="btn btn-primary ">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ###################################################################################################################################################################################################################################### -->
<!-- Modal Delete -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/eliminarC.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="cc" class="form-control" id="ccdelete" />
                    <h4>Seguro de eliminar este dato?</h4>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    <button type="submit" name="deletebtn" class="btn btn-primary ">SI</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ###################################################################################################################################################################################################################################### -->
<!-- INICIO DEL CONT PRINC <-->
<div class="container">
    <h1 class="text-center">CONTACTOS</h1>

    <div class="row">
        <?php
        if($rol==1){
            echo" <div class='col mb-3'>
            <!-- Button trigger modal -->
            <button type='button' class='btn btn-success' data-toggle='modal' data-target='#agregar-modal'>
                Nuevo
            </button>
        </div>";

        }
        
        ?>
       
        <div class="col-lg-12">

            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Edad</th>
                    <?php
                    if($rol==1){

                        echo"<th>Accion</th>";
                    }
                    ?>
                    

                </thead>
                <tbody>
                    <?php
                    foreach ($usuarios as $usuario) {
                    ?>
                        <tr>
                            <td><?php echo $usuario['cedula'] ?></td>
                            <td><?php echo $usuario['nombre'] ?></td>
                            <td><?php echo $usuario['apellidos'] ?></td>
                            <td><?php echo $usuario['fecha_nacimiento'] ?></td>
                            <td><?php echo $usuario['telefono'] ?></td>
                            <td><?php echo $usuario['direccion'] ?></td>
                            <td><?php echo $usuario['edad'] ?></td>
                            <?php
                            if($rol==1){
                                echo"<td><button type='button' class='btn btn-primary editbtn' data-toggle='modal' data-target='#editmodal'>
                                Editar
                            </button>
                            <button type='button' class='btn btn-danger deletebtn' data-toggle='modal'>
                                Eliminar
                            </button>
                            </td>";
                            }
                            
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- FIN DEL CONT PRINC -->
<?php require_once "vistas/parte_inferior.php" ?>