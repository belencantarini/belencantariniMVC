<?php

function exitoEnvioContactoSweetAlert(){
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

function redireccionContacto(){
    echo "<script>
    window.history.replaceState('http://localhost/proyectos%20php/AdministracionDiNatale/', '', 'index.php?ruta=contacto');
    </script>";
}

