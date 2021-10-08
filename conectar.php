<?php
class BD {
    private static $instancia = null;
    public static function crearInstancia() {
        error_reporting(E_ALL);
        try {
            $conn = new PDO("mysql:host=localhost;dbname=tienda2", 'root', 'root');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print($e);
        }
        return $conn;
    }
}
