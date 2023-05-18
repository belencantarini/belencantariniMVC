<?php

if(!isset($_SESSION["validarIngreso"])){

	echo '<script>window.location = "index.php?ruta=login";</script>';

	return;

}else{

	if($_SESSION["validarIngreso"] != "ok"){

		echo '<script>window.location = "index.php?ruta=login";</script>';

		return;
	}
	
}

?>