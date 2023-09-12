<?php
include('header.php');
include('functions.php');

$products = [
    [
        'nom' => 'Appareil photo',
        'price' => '200',
        'picture' => 'pics\app.png',
    ],
    [
        'nom' => 'Location de matériel',
        'price' => '300',
        'discount' => '10',
        'picture' => 'pics\materiel.png',
    ],
    [
        'nom' => 'Drone',
        'price' => '400',
        'discount' => '20',
        'picture' => 'pics\drone.png',
    ],
];
?>

<h1 class="titre1">Nos Produits</h1>

<div class="produits">

    <?php foreach ($products as $product) : ?>
    <img src="<?php echo $product['picture'] ?>" alt="appareil photo" width="420px" />

    <div class="">
        <div>
            <h2> <?php echo $product ['nom'] ?></h2>
            <p>
                Prix : <?php echo pricettc ($product['price']). "€"; ?>
             </p>
            <p>
                Prix HT : <?php echo number_format(priceHT($product['price']), 2, ",", '') . "€"; ?>
            </p>
            <p class="promo">
                <?php if ($product["discount"] !== null) :
                echo "Vous avez une promotion de : " . $product['discount'] . " % soit la séance à " . number_format(discount($product['price'], $product['discount']), 2, ",", '') . "€";
                ?>
                <?php endif; ?>
            </p>
        </div>
            <form method="post" action="panier.php">
            <label class="seance" type="texte" value=" Commander"> Commander  </label>
                    <p >
                    <label for="prestation">Quantité</label>
                        <select id="nombre de séance ">
                            <option value="Prestation que vous souhaitez"></option>
                             <option value="Prestation que vous souhaitez">1</option>
                             <option value="Prestation que vous souhaitez">2</option>
                            <option value="Prestation que vous souhaitez">3</option>
                        </select>
                            <input type="submit" name="envoyer" value="Envoyer">
                            <input type="reset" name="reset" value="Effacer">
            </form>
         </div>
    <?php endforeach ?>
</div>


<?php include ('footer.php') ?>