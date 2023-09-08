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
        'price' => '400€ ',
        'tirage' => '200 photos',
        'picture' => 'pics/solo.jpg',
    ],
];
?>

<h1 class="titre1">Nos offres</h1>

<div>
    <p>
        <?php foreach ($products as $product) : ?>
            <div>
                <p class="photo">
                    <img class="photo" src="<?php echo $product['picture'] ?>" alt="appareil photo" width="300px" />
                </p>
                <p class="text">
                    <?php echo $product['nom'].'<br>',$product['price']. '<br>', $product['tirage']; ?>
                </p>
            </div>
  
       <?php endforeach; ?>
    </p>
    <?php include('footer.php');?>
</div>