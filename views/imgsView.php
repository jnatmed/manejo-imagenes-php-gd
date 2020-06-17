<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\stilos.css">
    <title>Rompecabezas</title>
</head>
<body>
    <audio id="cheers" controls="none" preload="auto" style="display:none">
    <source src="public\audios\aud.mp3" type="audio/mp3">
    </audio>
    
    <audio id="cut" controls="none" preload="auto" style="display:none">
    <source src="public\audios\cut.mp4" type="audio/mp4">
    </audio>
    
    <audio id="no" controls="none" preload="auto" style="display:none">
    <source src="public\audios\no.mp4" type="audio/mp4">
    </audio>

    <canvas id="canvas"></canvas>

    <h4>Imagenes Recortadas</h4>
    <div class="piezas">
        <?php
            $cont = 1; 
            foreach ($piezas as $pieza){?>
            <div>
                <img id="puzz<?= $cont;?>" src="data:image/jpeg;base64,<?= $pieza;?>">
            </div>          
        <?php
            $cont=$cont+1; 
            }?>    
    </div>
    <link rel="script" href="scripts\puzzle.js">
</body>
</html>