<?php
include('header.php');

$products = [
    [
        'nom' => 'Séance individuelle',
        'price' => '200€',
        'tirage' => '70 photos',
        'picture' => 'pics\girl.jpg',
    ],
    [
        'nom' => 'Séance en couple',
        'price' => '300€',
        'tirage' => '150 photos',
        'picture' => 'pics/couple.jpg',
    ],
    [
        'nom' => 'Mariage',
        'price' => '400€',
        'tirage' => '200 photos',
        'picture' => 'pics/solo.jpg',
    ],
];
?>

<h1>Nos offres</h1>

<div class="offre">
    <p>Making memories
        <?php foreach ($products as $product) : ?>

    <div class="product">
        <?php echo $product['nom'];
            echo $product['price'];
            echo $product['tirage'];
        ?>
      <img class="image" src="<?php  echo $product['picture'] ?>" alt="appareil photo" width="350px" />

    </div>

<?php endforeach ?>
</p>
</div>

<?php include('footer.php'); ?>