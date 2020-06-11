<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Imagenes</title>
</head>
<body>
    <img src="image/jpeg;base64,<?= base64_encode(file_get_contents($imgre));?>" alt="">
</body>
</html>