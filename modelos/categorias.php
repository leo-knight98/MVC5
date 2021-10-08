<?php
class Categoria {
    public static function verTodas() {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("SELECT * FROM categorias");
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    public static function crear($nombre) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("INSERT INTO categorias(nombre) VALUES (:nombre)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
    }

    public static function verId($nombre) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT id FROM categorias WHERE nombre = :nombre");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();

        $categoria = $stmt->fetch();
    }
}

?>