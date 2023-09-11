<?php
include('header.php');
include('functions.php');

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
        'discount' => '10',
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

    <?php foreach ($products as $product) : ?>
    <img src="<?php echo $product['picture'] ?>" alt="appareil photo" width="320px" />

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
                <label class="seance" type="texte" value=" Je veux "> Je veux  </label>
                    <p >
                    <label for="prestation">Pour :</label>
                        <select id="nombre de séance ">
                            <option value="Prestation que vous souhaitez"></option>
                             <option value="Prestation que vous souhaitez">1 séance </option>
                             <option value="Prestation que vous souhaitez">2 séances </option>
                            <option value="Prestation que vous souhaitez">3 séances </option>
                        </select>
                            <input type="submit" name="envoyer" value="Envoyer">
                            <input type="reset" name="reset" value="Effacer">
            </form>
         </div>
    <?php endforeach ?>
</div>

<?php include ('footer.php') ?>