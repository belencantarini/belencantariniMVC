<?php

require_once "conexion.modelo.php";

class ModeloTratamientos
{

	// -------------------Listar Tratamientos---------------------
	static public function mdlListarTratamientos($tabla, $estado)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = '$estado'");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->closeCursor();

		$stmt = null;
	}

	// -------------------Eliminar Tratamiento---------------------
	static public function mdlEliminarTratamiento($tabla, $id)
	{
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $id, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "ok";
		} else {
			return "error";
		}

		$stmt->closeCursor();

		$stmt = null;
	}

	// -------------------Seleccionar Tratamiento---------------------
	static public function mdlSeleccionarTratamiento($tabla, $id)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $id, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetch();

		$stmt->closeCursor();

		$stmt = null;
	}

	//-------------------Editar Tratamiento---------------------
	static public function mdlEditarTratamiento($tabla, $datos)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tratamiento = :tratamiento, descripcion = :descripcion, tarifa = :tarifa, estado = :estado WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":tratamiento", $datos["tratamiento"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":tarifa", $datos["tarifa"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		} else {
			return "error";
		}

		$stmt->closeCursor();

		$stmt = null;
	}

	// -------------------Finalizar Tratamiento---------------------
	static public function mdlFinalizarTratamiento($tabla, $id)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET estado = :estado WHERE id = :id");
		$estado = "Finalizado";
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		} else {
			return "error";
		}

		$stmt->closeCursor();

		$stmt = null;
	}

	// -------------------Agregar Tratamiento---------------------
	static public function mdlAgregarTratamiento($tabla, $datos)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (tratamiento, descripcion, tarifa, estado, imagen) VALUES (:tratamiento, :descripcion, :tarifa, :estado, :imagen)");


		$stmt->bindParam(":tratamiento", $datos["tratamiento"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":tarifa", $datos["tarifa"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		} else {
			return "error";
		}

		$stmt->closeCursor();

		$stmt = null;
	}

}

