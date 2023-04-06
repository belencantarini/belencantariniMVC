<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Contacto</title>
</head>
<body>
<section id='contacto' class="w-75 m-auto py-5">
    <div>
        <div class="text-uppercase text-center">
            <div>Contactame</div>
            <div class="h2">Enviame tu consulta</div>
        </div>        
        <form name="sendEmailForm" action="" method="POST" class="container p-0">
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
</body>