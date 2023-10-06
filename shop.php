<?php
include('header.php');
include('function.php');
include('functions_price.php');
include ('database.php') ; 

$products = Query1($mysqlConnection);
?>

<h1 class="titre1">Nos Produits</h1>

<div class="produits">

    <?php foreach ($products as $product) : ?>
        <img src="<?php echo $product['picture'] ?>" alt="appareil photo" width="420px" />

        <div class="">
            <div>
                <h2> <?php echo $product['nom'] ?></h2>
                <p>
                    Prix : <?php echo pricettc($product['price']) . "€"; ?>
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
            <form method="POST" action="panier.php">
                <label class="seance" type="texte" value=" Commander"> Commander </label>
                
                    <label for="quantite">Quantité</label>
                    <select name="quantite">
                        <option value="0"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <input type="hidden" name="idpanier" value="<?php echo $product['id'] ?>">
                    <button>Ajouter au panier</button>
            </form>
        </div>
    <?php endforeach ?>
</div>


<?php include('footer.php') ?>