<?php
require_once "conexion.modelo.php";

class ModeloAdministradores {
    // -------------------Ingreso Login Administrador---------------------
    static public function mdlIngresoAdministrador($tabla, $usuario) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = '$usuario'");
        $stmt->execute();
		return $stmt->fetch();
		$stmt->closeCursor();
        $stmt = null;
    }
}