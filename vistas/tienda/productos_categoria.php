<?php session_start() ?>
<div class="card">
    <div class="card-header">
        Lista de productos disponibles
    </div>
    <div class="card-body">
        <h1>Todos los productos</h1>
        
        <table class="table table-bordered table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $producto) { ?>
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
                        <td><a href="?controlador=tienda&accion=productosPorCategoria&categoria=<?php echo $producto['categoria'] ?>"><?php echo $producto['categoria'] ?></a></td>
                        <td>
                            <form method="post" action="?controlador=tienda&accion=ponCarrito&id=<?php echo $producto['id'] ?>">
                                <input type="number" name="cantidad" id="cantidad" />
                                <input type="submit" class="btn btn-success" />
                            </form>
                        </td>
                    </tr>
                <?php } ?>        
            </tbody>
                        </table>
        
    </div>
</div>