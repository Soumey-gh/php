<?php
$nom = 'Votre séance photo où vous voullez';
$prix = 400;
$image = "pics/camera.jpg"; 
$prix = 200 ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Suu Photographie</h1>
    <h2> <?php echo $nom ?> </h2>
    <img src="<?php echo $image ?>" alt="appareil photo" width="500px"/>
</body>

</html>