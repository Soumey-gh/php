<?php
$image = "pics\couple.jpg";
$image1 = "pics\solo.jpg";
$image2 = "pics\girl.jpg";
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
    <?php include('header.php'); ?>

        <h1 class="titre1"> Making memories</h1>

        <div class="pics">
                <img class="image" src="<?php echo $image ?>" alt="appareil photo" width="400px" />
                <img class="image" src="<?php echo $image1 ?>" alt="appareil photo" width="400px" />
                <img class="image" src="<?php echo $image2 ?>" alt="appareil photo" width="400px" />
        </div>

    <?php include('footer.php'); ?>

</body>

</html>

