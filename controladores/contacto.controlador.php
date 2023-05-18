<?php

    class ControladorContacto{
        static public function ctrEnviarMail(){
            if (isset($_POST['nombre'])) {
                $nombre_form = $_POST['nombre'];
                $email_form = $_POST['email'];
                $mensaje_form = $_POST['mensaje'];
                $cuerpo_mensaje = "Nombre: " . $nombre_form . "\r\n" . "Email: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;
            
                mail("belencantarini@gmail.com", "Mensaje enviado desde mi sitio web", $cuerpo_mensaje);
                
                echo '<script>window.location = "index.php?ruta=inicio&exito_envio";</script>';
                
            }
        }

}


