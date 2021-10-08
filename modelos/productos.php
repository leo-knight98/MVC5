<?php
require_once("conectar.php");

class Producto {

    public static function verTodo() {
        
        $connBD = BD::crearInstancia();
        $cursor = $connBD->query("SELECT productos.id, productos.nombre, productos.precio, productos.disponible, categorias.nombre as categoria FROM productos INNER JOIN categorias ON categorias.id = productos.categoria ORDER BY productos.id");
        $listaProductos = $cursor->fetchAll();
        return $listaProductos;
    }

    public static function porCategoria($categoria) {
        $connBD = BD::crearInstancia();
        $cursor = $connBD->query("SELECT productos.id, productos.nombre, productos.precio, productos.disponible, categorias.nombre as categoria FROM productos INNER JOIN categorias ON categorias.id = productos.categoria WHERE productos.categoria = :categoria");
        $cursor->bindParam(':categoria', $categoria);
        $cursor->execute();
        $listaProductos = $cursor->fetchAll();
        return $listaProductos;
    }

    public static function crear($nombre, $precio, $categoria, $disponible) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("INSERT INTO productos(nombre, precio, categoria, disponible) VALUES(:nombre, :precio, :categoria, :disponible)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':disponible', $disponible);

        $stmt->execute();
    }

    public static function buscar($id) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $producto = $stmt->fetch();
        return $producto;
    }
    
    public static function editar($id, $nombre, $precio, $disponible) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("UPDATE productos SET nombre = :nombre, precio = :precio, disponible = :disponible WHERE id = :id");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':disponible', $disponible);
        $stmt->bindParam(':id', $id);
        
        $stmt->execute();
    }

    public static function borrar($id) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("DELETE FROM productos WHERE id = ?");
        $stmt->execute([$id]);
    }

   

    public static function categoriaId($nombre) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT id FROM categorias WHERE nombre = :nombre");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();

        $id = $stmt->fetch();
        return $id;
    }
}
?>