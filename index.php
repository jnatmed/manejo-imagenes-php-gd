<?php 

include 'controllers\imgController.php';
require_once 'vendor/autoload.php';

use App\controllers\ImgController;

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, []);


// Tipo de contenido
$info = require('info.php');
$imagenes = $info['infoImg'];
$imgMatriz = $info['matriz'];

$imgC = new ImgController($imagenes['dimensiones']);

foreach ($imagenes['imgs'] as $nombre_img=>$path_img){
   $salida = $imgC->redimensionar($path_img);
   $img_jpeg = $salida['formato_jpeg'];
   foreach ($imgMatriz as $coord){
      $resul = $imgC->recortar(NULL, $coord['x'], $coord['y'],$img_jpeg);            
      $piezas[] = $resul['resultado'];
   } 
}

include 'views/imgsView-2.php';

?>