<?php

    class ControladorContacto{
        static public function ctrContacto(){
            if (isset($_POST['nombre'])) {
                $nombre_form = $_POST['nombre'];
                $email_form = $_POST['email'];
                $mensaje_form = $_POST['mensaje'];
                $cuerpo_mensaje = "Nombre: " . $nombre_form . "\r\n" . "Email: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;
            
                mail("belencantarini@gmail.com", "Mensaje enviado desde mi sitio web", $cuerpo_mensaje);
                exitoEnvioContactoSweetAlert();
            }
        }

        public function exitoEnvioContactoSweetAlert(){
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

        
    }


