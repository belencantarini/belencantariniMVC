<?php

// CARGAR IMAGEN DESDE ARCHIVO
echo '<pre>';
print_r($_FILES['archivo']);
echo '<pre>';

$original = $_FILES['archivo'];
$nombre = $original['name'];
$array_nombre = explode('.',$nombre);
$extension = array_pop($array_nombre);
$array = glob('imagenes/'.$array_nombre[0]."*".$extension);
$cantidad=count($array);
$nombre_final = $array_nombre[0].$cantidad.".".$extension;


move_uploaded_file($original['tmp_name'], 'imagenes/' . $nombre_final);
