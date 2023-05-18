<?php
session_start();


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

<div>
    <div class="text-uppercase text-center">
        <div class="h2 p-5">Tratamientos y Tarifas</div>
        <div class="pb-3">Administracion de servicios</div>
    </div>
    
    <div class="border rounded-3">
        <nav class="nav pink justify-content-end gap-2 py-3 px-4">
            <a class="nav-link" href="index.php?ruta=admin_tratamiento">Listado de tratamientos</a>
            <a class="nav-link" href="index.php?ruta=nuevo_tratamiento">Generar nuevo tratamiento</a>
            <a class="nav-link active" href="index.php?ruta=confirmar_tratamientos">Pendientes de confirmacion</a>
            <button type="button" class="btn btn-outline-dark p-0"><a class="nav-link" href="index.php?ruta=salir">SALIR</a></button>    
        </nav>
        <div>
            <div class="row row-cols-lg-3 row-cols-1 g-3 p-3">
                <?php
                        $tratamientos = ControladorTratamientos::ctrListarTratamientos("tratamientos", "procesando");
                        if (!$tratamientos) {
                            echo '<div class="alert alert-success mx-auto my-5 w-75">
                            ¡Aun no hay tratamientos en la lista!
                            </div>';
                        } else {
                        foreach ($tratamientos as $tratamiento):?>
                            <div class="col">
                            <div class="card h-100">
                            <div class="d-flex image-size">
                                <img src="<?php echo $tratamiento['imagen'];?>" class="card-img-top tto-image mt-0 mx-auto" alt="<?php echo $tratamiento['tratamiento'];?>">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1">
                                    <h5 class="card-title"><?php echo $tratamiento['tratamiento'];?></h5>
                                    <p class="card-text"><?php echo $tratamiento['descripcion']?></p>
                                    <p class="card-text"><small class="text-muted">Tarifa $ <?php echo $tratamiento['tarifa'];?></small></p>
                                    <p class="card-text"><small class="text-muted">Estado: <?php echo $tratamiento['estado'];?></small></p>
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none text-dark" href="index.php?ruta=editar_tratamientos&id=<?php echo $tratamiento['id']; ?>">Editar</a></button>
                                        <form method="post">
                                            <input type="hidden" value="<?php echo $tratamiento['id']; ?>" name="eliminarTratamiento">
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                            <?php
                                                $eliminar = new ControladorTratamientos();
                                                $eliminar -> ctrEliminarTratamiento();
                                            ?>
                                        </form>
                                        <form method="post">
                                            <input type="hidden" value="<?php echo $tratamiento['id']; ?>" name="finalizarTratamiento">
                                            <button type="submit" class="btn btn-success">Finalizar</button>
                                            <?php
                                                $finalizar = ControladorTratamientos::ctrFinalizarTratamiento($tratamiento['id']);
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; }?>

            </div>
        </div>
    </div>                
</div>