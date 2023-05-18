<?php

class ControladorSweetAlert{

static public function exitoEnvioContactoSweetAlert(){
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Mensaje enviado!',
        text: 'Hemos recibido tu mensaje, te contestaremos a la brevedad.',
        confirmButtonText:'OK',
        confirmButtonColor: '#3085d6',
    })
    </script>";
}

static public function redireccionContacto(){
    echo '<script>window.location = "index.php?ruta=inicio";</script>';
}
}

