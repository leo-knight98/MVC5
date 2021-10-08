<?php
require_once("conectar.php");

class Carrito {
    public static function add($usuario, $producto, $cantidad) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("INSERT INTO carrito(usuario, producto, cantidad) VALUES (:usuario, :producto, :cantidad)
                                    ON DUPLICATE KEY UPDATE cantidad = cantidad + :cantidad");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':producto', $producto);
        $stmt->bindParam(':cantidad', $cantidad);
        
        $stmt->execute();
    }

    public static function mostrar($usuario) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT productos.id, productos.nombre, productos.precio, productos.disponible, carrito.cantidad FROM productos INNER JOIN carrito ON productos.id = carrito.producto WHERE carrito.usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        $productos = $stmt->fetchAll();
        return $productos;
    }

    public static function buscar($usuario, $producto) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM carrito WHERE usuario = :usuario AND producto = :producto");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':producto', $producto);
        $stmt->execute();

        $producto = $stmt->fetch();
        return $producto;
    }

    public static function update($cantidad, $usuario, $producto) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("UPDATE carrito SET cantidad = :cantidad WHERE usuario = :usuario AND producto = :producto");
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':producto', $producto);
        $stmt->execute();
    }

    public static function quitar($usuario, $producto) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("DELETE FROM carrito WHERE usuario = :usuario AND producto = :producto");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':producto', $producto);
        $stmt->execute();
    }

    public static function vaciar($usuario) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("DELETE FROM carrito WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
    }

    public static function comprar($usuario) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("DELETE FROM carrito WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
    }
}
?>