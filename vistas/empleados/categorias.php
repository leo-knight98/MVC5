<div class="card">
    <div class="card-header">
        Gestión de categorías
    </div>
    <div class="card-body">
        <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crearCat" role="button">Crear categoría</a>
        <a name="" id="" class="btn btn-primary" href="?controlador=empleados&accion=productos" role="button">Gestionar productos</a><br>
        <table class="table table-bordered table-responsive">
            <thead class="thead-default">
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php foreach($listaCategorias as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria['id']; ?></td>
                        <td><?php echo $categoria['nombre']; ?></td>
                        <td><a name="" id="" class="btn btn-outline-info" href="" role="button">Editar</a>
                        <a name="" id="" class="btn btn-outline-danger" href="" role="button">Borrar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>