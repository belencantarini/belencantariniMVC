<?php 
require_once "./controladores/plantilla.controlador.php";
require_once "./controladores/sweetalert.controlador.php";
require_once "./controladores/contacto.controlador.php";
require_once "./controladores/tratamientos.controlador.php";
require_once "./controladores/administradores.controlador.php";
require_once "./modelos/tratamientos.modelo.php";
require_once "./modelos/administradores.modelo.php";

//instanciar objetos
$plantilla = new ControladorPlantilla();
//ejecutamos el objeto
$plantilla ->ctrGetPlantilla();

require_once "./controladores/spinner.controlador.php";
?>