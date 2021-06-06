<?php require_once "vistas/parte_superior.php" ?>

<?php
include_once '../php/base_de_datos.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- Modal Agregar -->
<div class="modal fade" id="agregar-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/registrar.php" method="POST">
                <div class="modal-body">

                    <div class="form-group">

                        <label>Usuario</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Ingrese El Nombre" required pattern="[A-Z a-z0-9]+">

                    </div>
                    <div class="form-group">

                        <label>Correo</label>
                        <input type="email" name="email" class="form-control" placeholder="Ingrese El Correo" required>

                    </div>
                    <div class="form-group">

                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Ingrese La Contraseña" required>

                    </div>
                    <div class="form-group">

                        <label>Repite la Contraseña</label>
                        <input type="password" name="password2" class="form-control" placeholder="Repite la Contraseña" required>

                    </div>


                    <input type="hidden" name="rol" class="form-control" value="1">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="boton_register" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ###################################################################################################################################################################################################################################### -->
<!-- Modal Editar -->
<div class="modal fade" id="editmodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/editarU.php" method="POST">
               
            <div class="modal-body">

              

                        <input type="hidden" name="editid" id="idedit" class="form-control" >

                  
                    <div class="form-group">

                        <label>Usuario</label>
                        <input type="text" name="Nombre" id="nombre" class="form-control" placeholder="Ingrese El Nombre" required pattern="[A-Z a-z0-9]+">

                    </div>
                    <div class="form-group">

                        <label>Correo</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese El Correo" required>

                    </div>
                    <div class="form-group">

                        <label>Contraseña</label>
                        <input type="password" name="password" id="pass1" class="form-control" placeholder="Ingrese La Contraseña" required>

                    </div>
                    <div class="form-group">

                        <label>Repite la Contraseña</label>
                        <input type="password" name="password2" id="pass2" class="form-control" placeholder="Repite la Contraseña" required>

                    </div>

                    <div class="form-group">

                        <label>Rol</label>
                        <select name="rol_edit" class="form-control">
                            <option value="1">Admin</option>
                            <option value="2">Cliente</option>
                        </select>

                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="edituser" class="btn btn-primary ">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ###################################################################################################################################################################################################################################### -->
<!-- Modal Delete -->
<div class="modal fade" id="deletemodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/eliminaruser.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="id" class="form-control" id="iddelete" />
                    <h4>Seguro de eliminar este Usuario?</h4>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    <button type="submit" name="deletebt2" class="btn btn-primary ">SI</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ###################################################################################################################################################################################################################################### -->

<!-- INICIO DEL CONT PRINC -->
<div class="container">
    <h1 class="text-center">USUARIOS</h1>

    <div class="row">
        <div class="col mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar-modal">
                Nuevo
            </button>
        </div>
        <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Id</th>
                    <th>Rol</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($usuarios as $usuario) {
                        if ($usuario['rol'] == 1) {
                            $usuario['rol'] = "Admin";
                        } else {
                            $usuario['rol'] = "Cliente";
                        }
                    ?>
                        <tr>
                            <td><?php echo $usuario['id'] ?></td>
                            <td><?php echo $usuario['rol'] ?></td>
                            <td><?php echo $usuario['nombre'] ?></td>
                            <td><?php echo $usuario['correo'] ?></td>
                            <td><?php echo $usuario['contrasena'] ?></td>
                            <td><button type="button" class="btn btn-primary editbtn2" data-toggle="modal" data-target="#editmodal">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger deletebtn2" data-toggle="modal">
                                    Eliminar
                                </button>
                            </td>
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