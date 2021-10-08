<?php
session_start();

require_once("modelos/usuarios.php");
class Controlador {
    public function __construct($accion) {
        $this->accion = $accion;
        $this->$accion();
    }

    function inicio() {
        require_once("vistas/usuario/inicio.php");
    }

    function login() {
        if (isset($_POST)) {
            $usuario = Usuarios::login($_POST['nombre']);
            if (($usuario['nombre'] == $_POST['nombre']) && ($usuario['pass'] == $_POST['passw'])) {
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['rol'] = $usuario['rol'];

                if ($usuario['rol'] == 'cliente') {
                    header("Location: ./?controlador=usuario&accion=inicio");
                } else if ($usuario['rol'] == 'empleado') {
                    header("Location: ./?controlador=empleados&accion=productos");
                } else if ($usuario['rol'] == 'admin') {
                    header("Location: ./?controlador=admin&accion=usuarios");
                }
            } else {
                echo "Nombre de usuario o contraseña incorrectos";
            }
        }
        require_once("vistas/usuario/login.php");
    }

    function logout() {
        session_destroy();
        header("Location:./?controlador=usuario&accion=inicio");
    }

    function registro() {
        if($_POST) {
            if($_POST['pass'] != $_POST['passcon']){
                echo "Las contraseñas deben ser iguales.";
            } else if(strlen($_POST['pass']) < 8) {
                echo "La contraseña debe tener 8 caracteres o más.";
            } else {
                $nombre = $_POST['nombre'];
                $pass = $_POST['pass'];   
                $pais = $_POST['pais'];
                $correo = $_POST['correo'];
                $rol = "cliente";
                
                echo "funciona";
                Usuarios::crear($nombre, $pass, $rol, $pais, $correo);
                header("Location:./?controlador=usuario&accion=inicio");
                echo "Usuario registrado con éxito"; 
           }  
        }
        include_once("vistas/usuario/registro.php");
    }
}
?>