<?php

class ControladorTratamientos
{

	// -------------------Listar Tratamientos---------------------
	static public function ctrListarTratamientos($tabla, $estado)
	{
		$respuesta = ModeloTratamientos::mdlListarTratamientos($tabla, $estado);

		return $respuesta;
	}

	// -------------------Eliminar Tratamiento---------------------
	public function ctrEliminarTratamiento()
	{
		if (isset($_POST["eliminarTratamiento"])) {
			$tabla = "tratamientos";
			$id = $_POST["eliminarTratamiento"];

			$respuesta = ModeloTratamientos::mdlEliminarTratamiento($tabla, $id);

			if ($respuesta == "ok") {
				echo '<script>
				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}
				window.location = "index.php?ruta=admin_tratamiento";
				</script>';
			}
		}
	}

	// -------------------Seleccionar Tratamiento---------------------
	static public function ctrSeleccionarTratamiento($id)
	{
		$tabla = "tratamientos";
		$respuesta = ModeloTratamientos::mdlSeleccionarTratamiento($tabla, $id);

		return $respuesta;
	}

	//-------------------Editar Tratamiento---------------------
	static public function ctrEditarTratamiento($id)
	{
		if (isset($_POST["editarTratamiento"])) {
			$tabla = "tratamientos";

			$datos = array(
				"id" => $id,
				"tratamiento" => $_POST["editarTratamiento"],
				"tarifa" => $_POST["editarTarifa"],
				"descripcion" => $_POST["editarDescripcion"],
				"estado" => "procesando",
			);

			$respuesta = ModeloTratamientos::mdlEditarTratamiento($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?ruta=confirmar_tratamientos";

				</script>';
			}
		}
	}

	//-------------------Finalizar Tratamiento---------------------
	static public function ctrFinalizarTratamiento($id)
	{
		if (isset($_POST["finalizarTratamiento"])) {
			$tabla = "tratamientos";

			$respuesta = ModeloTratamientos::mdlFinalizarTratamiento($tabla, $id);

			if ($respuesta == "ok") {

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?ruta=admin_tratamiento";

				</script>';
			}
		}
	}

	//-------------------Agregar Tratamiento---------------------
	static public function ctrCrearTratamiento()
	{
		if (isset($_POST["nuevoTratamiento"])) {
			if (
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTratamiento"]) &&
				preg_match('/^[0-9]+$/', $_POST["tarifa"])
			) {
				$tabla = "tratamientos";
				$datos = array(
					"tratamiento" => $_POST["nuevoTratamiento"],
					"tarifa" => $_POST["tarifa"],
					"estado" => "procesando"
				);

				if ($_POST['descripcion'] !== ""){
					$datos["descripcion"] = $_POST['descripcion'];
				} else {
					$datos["descripcion"] = "Empeza hoy ese tratamiento que siempre quisiste!!!";
				}
    
				if ($_FILES['archivo']['name'] !== ""){
					// CARGAR IMAGEN DESDE ARCHIVO
					$original = $_FILES['archivo'];
					$nombre = $original['name'];
					$array_nombre = explode('.',$nombre);
					$extension = array_pop($array_nombre);
					$array = glob('imagenes/'.$array_nombre[0]."*".$extension);
					$cantidad=count($array);
					$nombre_final = $array_nombre[0].$cantidad.".".$extension;
					move_uploaded_file($original['tmp_name'], 'imagenes/' . $nombre_final);
			
					$datos["imagen"] = "./imagenes/" . $nombre_final;
				} else if ($_POST['imagenUrl'] !== "") {
					$datos["imagen"] = $_POST['imagenUrl'];
				} else {
					$datos["imagen"] = "https://cdn.pixabay.com/photo/2013/11/28/11/29/heart-220183_960_720.jpg";
				};
		

				$respuesta = ModeloTratamientos::mdlAgregarTratamiento($tabla, $datos);
				return $respuesta;

			}
		}

	}
}

