<?php
require_once("conectar.php");

class Usuario {
    public static function verTodos() {
        $connBD = BD::crearInstancia();
        $cursor = $connBD->query("SELECT * FROM usuarios");
        $listaUsuarios = $cursor->fetchAll();
        return $listaUsuarios;
    }

    public static function crear($nombre, $pass, $rol, $pais, $correo) {
        $connBD = BD::crearInstancia();
        echo $nombre." ".$pass." ".$rol." ".$pais." ".$correo;
        $stmt = $connBD->prepare("INSERT INTO usuarios(nombre, pass, rol, pais, correo) VALUES (?, ?, ?, ?, ?)");

        $stmt->execute([$nombre, $pass, $rol, $pais, $correo]);
    }

    public static function editar($id, $nombre, $rol, $pais, $correo) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("UPDATE usuarios SET nombre = ?, rol = ?, pais = ?, correo = ? WHERE id = ?");

        $stmt->execute([$nombre, $rol, $pais, $correo, $id]);
    }

    public static function buscar($id) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT nombre, rol, pais, correo FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $usuario = $stmt->fetch();
        return $usuario;
    }

    public static function borrar($id) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute($id);
    }
}
?>