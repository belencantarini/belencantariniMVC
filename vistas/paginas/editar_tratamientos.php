<?php
// session_start();


if(!isset($_SESSION["validarIngreso"])){

	echo '<script>window.location = "index.php?ruta=login";</script>';

	return;

}else{


	if($_SESSION["validarIngreso"] != "ok"){

		echo '<script>window.location = "index.php?ruta=login";</script>';

		return;
	}
	
}

if(isset($_GET["id"])){

	$id = $_GET["id"];

	$tratamiento = ControladorTratamientos::ctrSeleccionarTratamiento($id);

}

?>


<section class="w-75 m-auto py-5">
    <div>
        <div class="text-uppercase text-center">
            <div class="h2">Tratamientos y Tarifas</div>
            <div class="pb-3">Administracion de servicios</div>
        </div>
        
        <div class="border rounded-3">
        <nav class="nav pink justify-content-end gap-2 py-3 px-4">
            <a class="nav-link " href="index.php?ruta=admin_tratamiento">Listado de tratamientos</a>
            <a class="nav-link" href="index.php?ruta=nuevo_tratamiento">Generar nuevo tratamiento</a>
            <a class="nav-link" href="index.php?ruta=confirmar_tratamientos">Pendientes de confirmacion</a>
            <button type="button" class="btn btn-outline-dark p-0"><a class="nav-link" href="index.php?ruta=salir">SALIR</a></button>    
        </nav>
            <div>
                <div>
                    
                    <form name="editarTratamientos" method="POST" class="container px-4 py-3 rounded-bottom bg-danger bg-opacity-25">
                        <div class="container">
                            <p class="text-center">Id. del tratamiento: <?php echo $tratamiento['id']?></p> 
                            <div class="row ">
                                <div class="col-8 ps-0">
                                    <label for="formTratamiento" class="form-label">Tratamiento</label>
                                    <div><input type="text" class="form-control " id="formTratamiento" name="editarTratamiento" placeholder="Tratamiento" value='<?php echo $tratamiento['tratamiento']?>' required></div>
                                </div>
                                <div class="col-4 pe-0">
                                    <label for="formTarifa" class="form-label">Tarifa</label>
                                    <div><input type="number" class="form-control "  id="formTarifa" name="editarTarifa" placeholder="Tarifa" value='<?php echo $tratamiento['tarifa']?>' required></div>
                                </div>
                            </div>
                        </div>
                        <label class="mt-3" for="formDescripcion">Descripcion</label>
                        <textarea class="form-control"  id="formDescripcion" name="editarDescripcion" cols="30" rows="3" placeholder="Descripcion"><?php echo $tratamiento['descripcion']?></textarea>
                        <label for="formImagen" class="form-label mt-3">URL de la imagen</label>
                        <input disabled type="text" class="form-control mb-3"  id="formImagen" name="editarImagen" placeholder="URL imagen" value='<?php echo $tratamiento['imagen']?>'>
                        <div class="d-flex justify-content-center p-3"><img src="<?php echo $tratamiento['imagen']?>" class="img-thumbnail" alt="img-thumbnail" width="200"></div>
                        
                        <?php
                        $editar = ControladorTratamientos::ctrEditarTratamiento($tratamiento['id']);
                        if($editar == "ok"){
                            echo '<script>
                                if(window.history.replaceState){
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>';
                            echo '<div class="alert alert-success">El tratamiento ha sido actualizado</div>';
                            echo '<script>
                                setTimeout(function(){
                                    window.location = "index.php?ruta=admin_tratamiento";
                                },3000);
                            </script>';
                        }
                        
                        ?>

                        <div class="d-flex justify-content-center"><button class="btn btn-dark" type="submit">Guardar cambios</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>