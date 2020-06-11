<?php 

// El archivo
$nombre_archivo = 'imgs\salon-sofa-rosa-4.jpg';
$porcentaje = 0.5;

// Tipo de contenido
// header('Content-Type: image/jpeg');

// Obtener nuevas dimensiones
list($ancho, $alto) = getimagesize($nombre_archivo);
$nuevo_ancho = 500;
$nuevo_alto = 300;

// Redimensionar
$imagen_p = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
$imagen = imagecreatefromjpeg($nombre_archivo);
imagecopyresampled($imagen_p, $imagen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);


// Imprimir
// imagejpeg($imagen_p, null, 100);

  
// Set the crop image size  
$im2 = imagecrop($imagen, ['x' => 0,
                           'y' => 0, 
                           'width' => 300, 
                           'height' => 300]); 
// imagejpeg($im2); 


ob_start (); 

  imagejpeg ($im2, NULL, 100);
//   $image_croped = ob_get_contents (); 
//   imagejpeg ($imagen_p);
//   $image_resized = ob_get_contents (); 
  imagedestroy($im2);

$i = ob_get_clean (); 
// var_dump($image_croped);
// echo(base64_encode($image_resized));
// Guardar la imagen como 'textosimple.jpg'
// $imgre = imagecreatefromjpeg(imagejpeg($im2));
// var_dump($i);

echo "<img src='data:image/jpeg;base64,".base64_encode($i)."'>"; //saviour line! 

// include 'salida.php';

?>