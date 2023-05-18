<main class="flex-grow-1">
<section>
    <div class="banner d-flex flex-column justify-content-around">
        <div class="d-flex flex-column justify-content-end align-items-end text-end pt-5 pe-5">
            <h2>Medicina estetica</h2>
            <p>Esta es tu oportunidad de sentirte plena y hacer eso que siempre quisiste para estar mejor. Los tratamientos son minimamente invasivos y se adaptan a cada necesidad.<p>
            <button type="button" class="btn btn-outline-dark"><a href="#tratamientos" class="text-decoration-none text-white">Quiero saber más!</a></button>
            <button type="button" class="btn-purple btn "><a href="#contacto" class="text-white text-decoration-none">Contacto</a></button>
        </div>
    </div>
</section>
<section id="tratamientos" class="w-75 m-auto py-5">
    <div class="text-center">
        <h3 class="text-uppercase pt-5 pb-3">Tratamientos y tarifas</h3>
        <div class="border rounded-3">
            <div>
                <div class="row row-cols-lg-3 row-cols-1 g-3 p-3">
                    <?php
                        $tratamientos = ControladorTratamientos::ctrListarTratamientos("tratamientos", "finalizado");
                        if (!$tratamientos) {
                            echo '<div class="alert alert-success mx-auto my-5 w-75">
                            ¡Próximamente podrás ver todos los tratamientos que tenemos para ofrecerte!
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
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php endforeach; }?>
                </div>
            </div>
        </div> 
    </div>
    <p class="small text-center">No te pierdas las oferta del 15% de descuento contratando al menos 3 servicios!</p>
    <div class="d-flex justify-content-center p-5">
        <button class="btn btn-purple px-5 py-3"><a class="nav-link" aria-current="page" href="index.php?ruta=admin_tratamiento">Administrar tratamientos y servicios</a></button>
    </div>
</section>
<section class="py-5">
    <div class="w-75 mx-auto" id="sobremi">
        <div class="d-flex flex-column flex-md-row border rounded">
            <div class="d-flex justify-content-center m-auto p-3 ">
                <img class="rounded-circle doctor" src="https://img.freepik.com/foto-gratis/doctor-tiro-medio-jeringa_23-2149313519.jpg?w=900&t=st=1668278014~exp=1668278614~hmac=1a84b9ec2560f76528f182e584e8a442084f7d81b7f81a74cb4efa33433f62e7" alt="Dra. Belen Cantarini">
            </div>
                
            <div class="p-5 bg-light">
                <h3 class="card-title">Sobre mi</h3>
                <p class="card-text pt-2">Este es Instituto de Estética Medica</p>
                <p class="card-text">Si querés sentirte mejor y mejorar tu imagen, no dudes en consultarnos. Somos profesionales especialistas de la estética y la salud.</p>
                <p class="card-text">Atiendo en mi consultorio ubicado en la zona de Belgrano y también lo hacemos a domicilio en capital federal.</p>
                <p class="card-text">Dra. Belen Cantarini</p>
            </div>
        </div>
    </div>
</section>
<section id='contacto' class="w-75 m-auto py-5">
    <div>
        <div class="text-uppercase text-center">
            <div>Contactame</div>
            <div class="h2">Enviame tu consulta</div>
        </div>        
        <form name="sendEmailForm" action="controladores/contacto.controlador.php" method="POST" class="container p-0">
            <div class="d-flex gap-2 flex-column flex-md-row m-0">
                <input type="text" class="form-control w-100" id="formNombre" name="nombre" placeholder="Nombre" required>
                <input type="email" class="form-control w-100" id="formEmail" name="email" placeholder="Correo" required>
            </div>
            <textarea class="form-control mt-3"  name="mensaje" id="formMensaje" cols="30" rows="5" placeholder="Sobre qué quieres consultar?" required></textarea>
            <input type="hidden" name="_subject" value="Nuevo mensaje!">
            <p class="p-0 m-0">Cuidá tu imagen, y sentite plena y natural: conocé los tratamientos. Tenemos tratamientos según tus necesidades.</p>
            <p class="text-muted small">Envia tu consulta y te contestare a la brevedad</p>
            <input class="btn btn-purple w-100" type="submit" value="Enviar formulario"></input>
        </form>
    </div>
</section>
</main>
