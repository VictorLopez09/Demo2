<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre='Victor';
        $edad='20';
        $sueldo='0.000';


        echo $nombre.'<br>'.'<br>';
        echo 'Mi edad es: '.$edad.'<br>';
        echo 'Mi sueldo es '.$sueldo.'<br>';

        $descuento = $sueldo-1000;
        echo'Mi sueldo es: '.$descuento;
    ?>
</body>
</html>