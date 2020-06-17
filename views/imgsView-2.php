<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PUZZLE</title>
<style>
canvas {	
	width:450px;
	height:450px;
    border: 5px solid black;
    margin:auto
}
.imagen_original{
	width:450px;
	height:450px;
	display:flex;
	flex-flow: row wrap;
}
</style>
</head>
<body>


<div id="top" style="width:1200px; margin:auto; margin-top:10px; text-align:center">
<header style="width:1190; height:100px;;border-left:10px solid black; ">
<h1 style="font-size:70px; margin:auto; text-align:center; color:black; text-shadow:2px 2px cyan;text-decoration:underline">CLASSIC-PUZZLE-GAME</h1>
</header>

<div style="margin-top:10px; height:1000px;">
<div>
<div style="width:50%; float:left; display:inline">
<div style="text-align:center; height:30px">
<h1 id="message"></h1> <!-- Este elemento se va modificando mientras corre el juego-->
</div>
<div style="text-align:center; height:30px">
<h1 id="moves"></h1> <!-- tambien se va modificando -->

  <audio id="cheers" controls="none" preload="auto" style="display:none">
  <source src="public/audios/aud.mp3" type="audio/mp3">
  </audio>
  
  <audio id="cut" controls="none" preload="auto" style="display:none">
  <source src="public/audios/cut.mp4" type="audio/mp4">
  </audio>
  
   <audio id="no" controls="none" preload="auto" style="display:none">
  <source src="public/audios/no.mp4" type="audio/mp4">
  </audio>
  
</div>

    <section class="lienzo">
        <canvas id="canvas" height="450px" width="450px"></canvas>
	</section>
</div>
	<h1 class="">IMAGEN ORIGINAL</h1>	
	<section class="imagen_original">
        <?php
            $cont = 1; 
            foreach ($piezas as $pieza){?>
            <article>
                <img class="piezas" id="puzz<?= $cont;?>" src="data:image/jpeg;base64,<?= $pieza;?>"  width="150" height="150">
			</article>          
        <?php
            $cont=$cont+1; 
            }?>    
    </section>
</div>
</div>
	<script src="scripts/puzzle.js"></script>
</body>
</html>