<?php
$nom = 'Only for you';
$prix = 400;
$image = "pics/camera.jpg"; 
$prix = 200 ;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>

<body>
    <?php include('header.php') ; ?>
    <h1> Making memories</h1>
    <h2> <?php echo $nom ?> </h2>
    <img class= "image" src="<?php echo $image ?>" alt="appareil photo" width="500px"/>
</body>

</html>