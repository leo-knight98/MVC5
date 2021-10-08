<div class="card">
    <div class="card-header">
        Gestión de productos
    </div>
    <div class="card-body">
    <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Crear producto</a>
    <a name="" id="" class="btn btn-primary" href="?controlador=empleados&accion=categorias" role="button">Gestionar categorías</a><br>
        <table class="table table-bordered table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaProductos as $producto) { ?>
                    <tr>    
                        <td><?php echo $producto['id'] ?></td>
                        <td><?php echo $producto['nombre'] ?></td>
                        <td><?php echo $producto['precio']." €" ?></td>
                        <td><?php 
                            if ($producto['disponible'] == 0) {
                                echo "No";
                            } else {
                                echo "Si";
                            }
                        ?></td>
                        <td><?php echo $producto['categoria'] ?></td>
                        <td><a name="" id="" class="btn btn-outline-info" href="?controlador=empleados&accion=editar&id=<?php echo $producto['id'] ?>" role="button">Editar</a>
                        <a name="" id="" class="btn btn-outline-danger" href="?controlador=empleados&accion=borrar&id=<?php echo $producto['id'] ?>" role="button">Borrar</a></td>
                    </tr>
                <?php } ?>        
            </tbody>
        </table>
        
    </div>
</div>