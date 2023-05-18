<?php
session_start();
?>

<section class="mx-auto p-5 border rounded shadow w-50 my-5">
    <div class="text-uppercase text-center">
            <div class="h2">Iniciar sesión</div>
    </div>     
    <form method="post" class="container p-0 d-flex flex-column">
        <label for="Usuario" class="pt-3">Nombre de usuario:</label>
        <input type="text" class="form-control w-100" id="formUsuario" name="loginUsuario" placeholder="Usuario" required>
        <label for="Contraseña"  class="pt-3">Contraseña:</label>
        <input type="password" class="form-control w-100" id="formClave" name="loginClave" placeholder="Contraseña" minlengh='8' maxlength="20" required>
        <!-- <img src="./controladores/captcha.controlador.php" alt="captcha" class="pt-4 pb-2 mx-auto"> -->
        <!-- <input type="text" name="captcha" class="form-control w-75 mx-auto mb-3" placeholder="Ingrese el captcha"> -->
        <?php 
		$ingreso = new ControladorAdministradores();
		$ingreso -> ctrIngresoAdministrador();
		?>
        <button class="btn btn-purple w-100 mt-4" type="submit">Ingresar</button>
    </form>
</section>
