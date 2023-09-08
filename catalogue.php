<?php
include('header.php');
include ('functions.php') ;

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

<div class="produits">
    <p>
        <?php foreach ($products as $product) : ?>
                <img  class = "img" src="<?php echo $product['picture'] ?>" alt="appareil photo" width="300px" />
                    <p class="text">
                        <?php echo $product['nom'].'<br>',$product['price']. '<br>', $product['tirage'].'<br>' ;
                        echo discount($price, $discount) ; 
                        echo discount($price1, $discount) ; 
                        ?>
                    </p>
       <?php endforeach; ?>
    </p>
</div>
    <?php include('footer.php');?>
