<?php
session_start();

class ControladorAdministradores {

    // -------------------Ingreso Login Administrador---------------------
    public function ctrIngresoAdministrador() {
        if (isset($_POST["loginUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginUsuario"]) &&
                    preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginClave"])) {
                $tabla = "administradores";
                $usuario = $_POST["loginUsuario"];
                $respuesta = ModeloAdministradores::mdlIngresoAdministrador($tabla, $usuario);
                // $encriptarPassword = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                        
                if (!$respuesta){
                    echo '<script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-danger mt-2">Error al ingresar al sistema, el email o la contraseña no coinciden, vuelve a intentarlo</div>';
                } elseif ($respuesta["usuario"] == $_POST["loginUsuario"] && $respuesta["clave"] == $_POST["loginClave"]) {
                    $_SESSION["validarIngreso"] = "ok";
                    echo '<script>window.location = "index.php?ruta=admin_tratamiento";</script>';
                } else {
                    echo '<script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-danger mt-2">Error al ingresar al sistema, el email o la contraseña no coinciden, vuelve a intentarlo</div>';
                }
            }
        }
    }
}