<?php
include('header.php');

$products = [
    [
        'nom' => 'Séance individuelle',
        'price' => '200€ pour',
        'tirage' => '70 photos',
        'picture' => 'pics\girl.jpg',
    ],
    [
        'nom' => 'Séance en couple',
        'price' => '300€ pour',
        'tirage' => '150 photos',
        'picture' => 'pics/couple.jpg',
    ],
    [
        'nom' => 'Mariage',
        'price' => '400€ pour',
        'tirage' => '200 photos',
        'picture' => 'pics/solo.jpg',
    ],
];
?>

<h1 class="titre1">Nos offres</h1>

<div class="offre">
    <p>
        <?php foreach ($products as $product) : ?>

    <div class="product">
        <?php echo $product['nom'];
            echo $product['price'];
            echo $product['tirage'];
        ?>
    </div>
    <img class="photo" src="<?php echo $product['picture'] ?>" alt="appareil photo" width="300px" />

<?php endforeach ?>
</p>
</div>

<?php include('footer.php'); ?>