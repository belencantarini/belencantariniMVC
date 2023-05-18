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


?>

<div>
    <div class="text-uppercase text-center">
        <div class="h2 p-5">Tratamientos y Tarifas</div>
        <div class="pb-3">Administracion de servicios</div>
    </div>
    
    <div class="border rounded-3">
        <nav class="nav pink justify-content-end gap-2 py-3 px-4">
            <a class="nav-link" href="index.php?ruta=admin_tratamiento">Listado de tratamientos</a>
            <a class="nav-link active" href="index.php?ruta=nuevo_tratamiento">Generar nuevo tratamiento</a>
            <a class="nav-link" href="index.php?ruta=confirmar_tratamientos">Pendientes de confirmacion</a>
            <button type="button" class="btn btn-outline-dark p-0"><a class="nav-link" href="index.php?ruta=salir">SALIR</a></button>    
        </nav>
        <div>
            <div>
                <div>
                    <form name="nuevoTratamiento" method="POST" enctype="multipart/form-data" class="container px-4 py-3 rounded-bottom bg-danger bg-opacity-25">
                        <div class="container"> 
                            <div class="row ">
                                <div class="col-8 ps-0"><input type="text" class="form-control " id="formTratamiento" name="nuevoTratamiento" placeholder="Tratamiento" required></div>
                                <div class="col-4 pe-0"><input type="number" class="form-control "  id="formTarifa" name="tarifa" placeholder="Tarifa" required></div>
                            </div>
                        </div>
                        <textarea class="form-control mt-3"  id="formDescripcion" name="descripcion" cols="30" rows="3" placeholder="Descripcion"></textarea>
                        <div class="d-flex my-3 gap-3">
                            <label class="cargarImagen" for="imageFile">Cargar imagen desde archivo<input type="file" name="archivo" id="imageFile" accept="image/png, image/gif, image/jpeg" class="d-none"></label><span class="m-auto" id="imageFileName">Ningún archivo seleccionado</span>
                            <button type="button" class="btn btn-pink" id="imageUrlBtn">Cargar imagen desde URL</button>
                            <input type="text" class="form-control w-50"  id="inputImageUrl" name="imagenUrl" placeholder="URL imagen" value="">
                        </div>
                        <div>
                            <img src="" alt="Image Preview" id="image" class="m-auto px-5 py-3 d-none img-thumbnail"  width="400">
                        </div>
                        <?php

                        $crearTratamiento = ControladorTratamientos::ctrCrearTratamiento();
                        if($crearTratamiento =="ok"){
                
                            echo '<script> 
                                if (window.history.replaceState){
                                window.history.replaceState(null,null, window.location.href);
                                }
                                </script>';
                                
                            echo '<div class="alert alert-success"> Se ha creado un nuevo tratamiento con exito, ve a la seccion de Pendientes de Confirmacion para finalizar la carga del mismo. </div>';
                            }
                            if ($crearTratamiento == "error"){
                            echo '<script> 
                            if (window.history.replaceState){
                                window.history.replaceState(null,null, window.location.href);
                            }
                            </script>';
                            
                            echo '<div class="alert alert-danger"> Error, no se pudo crear el nuevo tratamiento </div>';
                            }

                        ?>

                        <div class="d-flex justify-content-center p-3"><input class="btn btn-dark" type="submit" value="Crear tratamiento"></input></div>
                    </form>
                </div>
            </div>




<script>
    const inputImage = document.getElementById("imageFile");
    const inputImageName = document.getElementById("imageFileName");
    const previewImage = document.getElementById("image");
    const imageUrlBtn = document.getElementById("imageUrlBtn");
    const inputImageUrl = document.getElementById("inputImageUrl");

    inputImage.addEventListener("change", function(){
        const file = this.files[0];
        if(file) {
        const reader = new FileReader();
        reader.addEventListener("load", function(){
            previewImage.setAttribute("src", this.result);
            imageExists(previewImage.src).then(function(){console.log("me encanta")});
            previewImage.classList.add('d-block');
            previewImage.classList.remove('d-none');
            inputImageName.innerText = file.name;
            inputImageUrl.value = "";
        });
        reader.readAsDataURL(file);
        } else {
        previewImage.setAttribute("src", "");
        previewImage.classList.add('d-none');
        previewImage.classList.remove('d-block');
        inputImageName.innerText = "Ningún archivo seleccionado";
        inputImage.value = "";
        }
    });

    imageUrlBtn.addEventListener("click", function(){
        if(inputImageUrl.value) {
        imageExists(inputImageUrl.value).then(function(){
        //It exists
        console.log("me encanta");
        previewImage.setAttribute("src", inputImageUrl.value);
        previewImage.classList.add('d-block');
        previewImage.classList.remove('d-none');
        inputImageName.innerText = "Ningún archivo seleccionado";
        inputImage.value = "";
        }).catch(function(){
        //It does not exist
        console.log("terrible");
        })}})

      //   else {
      //   previewImage.setAttribute("src", "");
      //   previewImage.classList.add('d-none');
      //   previewImage.classList.remove('d-block');
      //   inputImageName.innerText = "Ningún archivo seleccionado";
      //

function imageExists(imageSrc) {
    return new Promise(function(resolve,reject){
    let img = new Image();
    img.src = imageSrc;
    img.onload = resolve;
    img.onerror = reject;
})}


</script>

    </div>                
</div>
</div>