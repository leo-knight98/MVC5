<div class="card">
    <div class="card-header">
        Lista de usuarios
    </div>
    <div class="card-body">
        <a name="crear" id="crear" class="btn btn-success" href="?controlador=admin&accion=crear" role="button">Crear usuario</a>
        <table class="table table-bordered table-responsive">
            <thead class="thead-default">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Pais</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($listausuarios as $usuario) { ?>
                        <tr>
                            <td><?php echo $usuario['id'] ?></td>
                            <td><?php echo $usuario['nombre'] ?></td>
                            <td><?php echo $usuario['rol'] ?></td>
                            <td><?php echo $usuario['pais'] ?></td>
                            <td><?php echo $usuario['correo'] ?></td>
                            <td>
                                <a name="" id="" class="btn btn-outline-info" href="?controlador=admin&accion=editar&id=<?php echo $usuario['id'] ?>" role="button">Editar</a>
                                <a name="" id="" class="btn btn-outline-danger" href="?controlador=admin&accion=borrar&id=<?php echo $usuario['id'] ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
        
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>