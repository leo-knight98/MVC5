<?php
require_once("conectar.php");

class Usuarios {
    public static function crear($nombre, $pass, $rol, $pais, $correo) {
        echo $nombre." ".$pass." ".$rol." ".$pais." ".$correo;
        $connBD = BD::crearInstancia();

        $stmt = $connBD->prepare("INSERT INTO usuarios(nombre, pass, rol, pais, correo) VALUES (:nombre, :pass, :rol, :pais, :correo)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':pass', $pass);
        $stmt->bindParam(':rol', $rol);
        $stmt->bindParam(':pais', $pais);
        $stmt->bindParam(':correo', $correo);

        $stmt->execute();
    }

    public static function login($nombre) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT id, nombre, pass, rol FROM usuarios WHERE nombre = :nombre");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $usuario = $stmt->fetch();

        return $usuario;
    }

    public static function baneado($mail) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM blacklist WHERE mail = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        $mail = $stmt->fetch();

        return $mail;
    }
    
}
?>