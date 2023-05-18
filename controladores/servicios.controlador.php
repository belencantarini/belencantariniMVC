<?php

class ControladorServicios{
    // Crear registro
    static public function ctrRegistro(){
        if (isset($_POST['registroServicio'])) {
            $tabla="tratamientos";
            $datos = array(
                "tratamiento" => $_POST["registroTratamiento"],
                "tarifa" => $_POST["registroTarifa"],
                "imagen" => $_POST["registroImagen"],
                "descripcion"=> $_POST["registroDescripcion"]
            );
            $respuesta = ServiciosModelo::nuevoServicio($tabla, $datos);
            return $respuesta;
        }
    }
    // Seleccionar registro
    static public function ctrSeleccionarRegistro($item, $valor){
        $tabla="tratamientos";
        $respuesta = ServiciosModelo::seleccionarServicio($tabla, $item, $valor);
        return $respuesta;
    }        
    // Ingreso
    static function ctrIngreso(){
        if (isset($_POST["ingresoMail"])) {
            $tabla = "administradores";
            $item = "email";
            $valor = $_POST["ingresoMail"];
            $respuesta = ServiciosModelo::seleccionarServicio($tabla, $item, $valor);
            if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                $_SESSION["validarIngreso"] = "ok";
                echo'<script>
                    if (window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?ruta=inicio";
                </script>';
            } else {
                echo'<script>
                    if (window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>';
                echo '<div class="alert alert-danger"> Error al ingresar al sistema, el email o la contraseña no coinciden. </div>';
            }
        }
    }
    // Actualizar registro
    static public function ctrActualizarRegistro(){
        if (isset($_POST['actualizarNombre'])) {
            if ($_POST['actualizarPassword']!=""){
                $password= $_POST["actualizarPassword"];
            } else {
                $password= $_POST["passwordActual"];
            }
            $tabla = "registros";
            $datos = array(
                "nombre" => $_POST["actualizarNombre"],
                "tarifa" => $_POST["actualizarTarifa"],
                "imagen" => $_POST["actualizarImagen"],
                "descripcion"=> $password
            );
            $respuesta = ServiciosModelo::actualizarServicio($tabla, $datos);
            
            if ($respuesta == "ok") {
                echo'<script>
                    if (window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?ruta=inicio";
                </script>';
            }
        }
    }
    // Eliminar registro
    static public function ctrEliminarRegistro(){
        if (isset($_POST['eliminarNombre'])) {
            $tabla = "registros";
            $valor = $_POST["eliminarRegistro"];
            $respuesta = ServiciosModelo::eliminarServicio($tabla, $valor);
            
            if ($respuesta == "ok") {
                echo'<script>
                    if (window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?ruta=inicio";
                </script>';
            }
        }
    }
}


