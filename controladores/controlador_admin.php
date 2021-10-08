<?php
session_start();
require_once("modelos/admin.php");
class Controlador {
    public function __construct($accion) {
        $this->accion = $accion;
        $this->$accion();
    }

    function usuarios() {
        if ($_SESSION['rol'] != 'admin') {
            header("Location:./?controlador=usuario&accion=inicio");
        } else {
            $listausuarios = Usuario::verTodos();
            include_once("vistas/admin/usuarios.php");
        }
        
    }

    function crear() {
        if ($_SESSION['rol'] != 'admin') {
            header("Location:./?controlador=usuario&accion=inicio");
        } else {
            if($_POST) {
                if($_POST['pass'] != $_POST['passcon']){
                    echo "Las contraseñas deben ser iguales";
                } else {
                    $nombre = $_POST['nombre'];
                    $pass = $_POST['pass'];
                    $rol = $_POST['rol'];
                    $pais = $_POST['pais'];
                    $correo = $_POST['correo'];
    
                    if ($rol == "") {
                        $rol = "cliente";
                    }
    
                    Usuario::crear($nombre, $pass, $rol, $pais, $correo);
                    print_r($_POST);
                    header("Location:./?controlador=admin&accion=usuarios");       
                }
            }
            include_once("vistas/admin/crear.php");
        }
        
    }

    function editar() {
        if ($_SESSION['rol'] != 'admin') {
            header("Location:./?controlador=usuario&accion=inicio");
        } else {
            $id = $_GET['id'];
            $usuario = Usuario::buscar($id);
            if($_POST) {
                $nombre = $_POST['nombre'];
                $rol = $_POST['rol'];
                $pais = $_POST['pais'];
                $correo = $_POST['correo'];
                if ($rol == "") {
                    $rol = $usuario['rol'];
                }
                
                Usuario::editar($id, $nombre, $rol, $pais, $correo);
                header("Location:./?controlador=admin&accion=usuarios");
            } 
            include_once("vistas/admin/editar.php");
        }
        
    }

    function borrar() {
        $id = $_GET['id'];
        Usuario::borrar($id);
        header("Location:./?controlador=admin&accion=usuarios");
    }
}
?>