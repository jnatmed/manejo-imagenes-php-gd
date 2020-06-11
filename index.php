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
// echo("<pre>");
// var_dump($info['infoImg']);
// var_dump($info['matriz']);
// exit();

// echo("<pre>");
// var_dump($imagenes['imgs']['img-1']);
foreach ($imagenes['imgs'] as $nombre_img=>$path_img){
   $salida = $imgC->redimensionar($path_img);
   $img_jpeg = $salida['formato_jpeg'];
   // var_dump($img_jpeg);
   foreach ($imgMatriz as $coord){
      $resul = $imgC->recortar(NULL, $coord['x'], $coord['y'],$img_jpeg);            
      $piezas[] = $resul['resultado'];
   } 
}
// var_dump($piezas);
// exit();

// var_dump($imagenes['imgs']['img-1']);


// $arrayImg = array(
//    'imagen' => ['redimensionada' =>$imgC->redimensionar($imagenes['imgs']['img-1']), // la funcion ya la devuelve en base64
//                 'recortada' => $imgC->recortar($imagenes['imgs']['img-1'], 420, 420), // la funcion ya la devuelve en base64
//                 'original' => $imagenes['imgs']['img-1']],                
//    'tipo_imagen' => 'jpeg'
// );
// echo($imgC->recortar($imagenes['imgs']['img-1'], 100, 100));
// $twig->render('imgsView.html',$arrayImg);
// $twig->render('imgsView.html',array('nombre' => 'juan'));
include 'views/imgsView.php';

?>