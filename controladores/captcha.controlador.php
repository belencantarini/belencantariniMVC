<?php
// session_start();
header('Content-type:image/png');

// echo file_get_contents("https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-6.png");

$imagen_captcha = imagecreate(100, 35);

$fondo = imagecolorallocate($imagen_captcha, 239, 192, 240);
$texto = imagecolorallocate($imagen_captcha, 82, 4, 34);


// Codigo captcha

$nro1 = rand(2,9);
$nro2 = rand(2,9);
$nro3 = rand(2,9);
$letra = array('a', 'h', 'g', 'e', 'd', 'm', 'k');
$simbolo = array('%', '$', '/', '@', '#');
$mezclar_letra = rand(0,6);
$mezclar_letra2 = rand(0,6);
$mezclar_simbolo = rand(0,4);

$_SESSION['codigo_captcha'] = $nro1 . $letra[$mezclar_letra] . $nro2 . $simbolo[$mezclar_simbolo] . $nro3 . $letra[$mezclar_letra2]; 


imagestring($imagen_captcha, 5, 20, 10, $_SESSION['codigo_captcha'], $texto);

imagepng($imagen_captcha);
imagedestroy($imagen_captcha);
?>