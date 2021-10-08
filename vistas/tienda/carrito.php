<?php session_start() ?>
<div class="card">
    <div class="card-header">
        Carrito
    </div>
    <div class="card-body">
    <table class="table table-bordered table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto['id'] ?></td>    
                        <td><?php echo $producto['nombre'] ?></td>
                        <td><?php echo $producto['cantidad'] ?></td>
                        <td><?php echo $producto['precio']*$producto['cantidad'] . " €" ?></td>
                        <td><?php 
                            if ($producto['disponible'] == 0) {
                                echo "No";
                            } else {
                                echo "Si";
                            }
                        ?></td>
                        <td><a name="quitar" id="quitar" class="btn btn-danger" href="?controlador=tienda&accion=quitarCarrito&id=<?php echo $producto['id'] ?>" role="button">Quitar del carrito</a></td>
                    </tr>
                <?php } ?>        
            </tbody>
        </table>
        <a name="comprar" id="comprar" class="btn btn-success" href="?controlador=tienda&accion=comprar" role="button">Comprar</a>
        <a name="vaciar" id="vaciar" class="btn btn-danger" href="?controlador=tienda&accion=vaciar" role="button">Vaciar carrito</a>
    </div>
</div>