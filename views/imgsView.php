<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .piezas{
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;  
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h4>Imagen Original</h4>
    <img class="receta_cargada" src="<?= $arrayImg['imagen']['original'];?>">
    <h4>Imagen redimensionada</h4>
    <img class="receta_cargada" src="data:image/<?= $arrayImg['tipo_imagen']; ?>;base64,<?= $arrayImg['imagen']['redimensionada']['formato_base64'];?>">
    <h4>Imagen Recortada</h4>
    <div class="piezas">
        <?php foreach ($piezas as $pieza){?>
            <div>
                <img  src="data:image/<?= $arrayImg['tipo_imagen']; ?>;base64,<?= $pieza;?>">
            </div>          
        <?php }?>    
    </div>
</body>
</html>