<?php
include('header.php');
include ('functions.php') ;

$products = [
    [
        'nom' => 'Séance individuelle',
        'price' => '200',
        'tirage' => '70 photos',
        'picture' => 'pics\girl.jpg',
    ],
    [
        'nom' => 'Séance en couple',
        'price' => '300',
        'tirage' => '150 photos',
        'discount'=> '10',
        'picture' => 'pics/couple.jpg',
    ],
    [
        'nom' => 'Mariage',
        'price' => '400',
        'tirage' => '200 photos',
        'discount' => '20',
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
                        <?php echo $product['nom'].'<br>', $product['tirage'].'<br>' ; ?>
                    </p>
                        <div class="price ">
                            <p> Prix = <?php echo pricettc ($product ['price']). "€"; ?> </p>
                            <P> Prix HT = <?php echo number_format(priceHT($product ['price']),2,",",''). "€"; ?></P>
                            <P>
                                <?php if ($product ["discount"] !== null ): 
                                    echo "Vous avez une promotion de : ". $product ['discount']. " % soit la séance à ". number_format(discount($product['price'], $product['discount']),2,",",''). "€";
                                    ?>
                                <?php endif; ?>
                            </P>
                        </div>
                    
       <?php endforeach; ?>
    </p>
</div>
    <?php include('footer.php');?>
