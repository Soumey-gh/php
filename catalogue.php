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
    <div class="img">
        <?php foreach ($products as $product) : ?>
            <img src="<?php echo $product['picture'] ?>" alt="appareil photo" width="300px" />
    </div>
    <!-- <div class="text">
        <?php echo $product['nom'] . '<br>', $product['tirage'] . '<br>'; ?>
        </div>
    <div class="price ">
        <p> Prix = <?php echo pricettc($product['price']) . "€"; ?> </p>
        <P> Prix HT = <?php echo number_format(priceHT($product['price']), 2, ",", '') . "€"; ?></P>
        <P>
            <?php if ($product["discount"] !== null) :
                echo "Vous avez une promotion de : " . $product['discount'] . " % soit la séance à " . number_format(discount($product['price'], $product['discount']), 2, ",", '') . "€";
            ?>
            <?php endif; ?>
        </P> -->
        <!-- <p>
        <form method="post" action="panier.php">
            <button class="séance" type="button"> Sélectionner cette séance </button>
            <p>
                <label for="prestation">Votre prestation:</label>
                <select id="Votre prestation">
                    <option value="Prestation que vous souhaitez">Séance individuelle</option>
                    <option value="Prestation que vous souhaitez">Séance en couple</option>
                    <option value="Prestation que vous souhaitez">Mariage</option>
                </select>

        </form>
        </p> -->
    </div>

<?php endforeach; ?>
</p>
</div>


<!-- <form method="post" action="panier.php">
    <fieldset>
        <legend>
            <b>Formulaire de Contact</b>
        </legend>
        <p>
            <label for="nom">Nom et Prénom:</label>
            <input id="nom" type="texte" name="nom" placeholder="Votre Nom et Prénom" size="30">
        </p>
        <p>
            <label for="email">Adresse mail:</label>
            <input id="email" type="email" name="email" placeholder="Votre adresse mail" size="30">
        </p>
        <p>
            <label for="date">Date :</label>
            <input id="date" type="texte" name="date" placeholder="ex : le 12 septembre" size="30">
        </p>
        <p>
            <label for="lieux">Lieux de la prestation :</label>
            <input id="lieux" type="texte" name="lieux" placeholder="Ex : Grenoble" size="30">
        </p>
        <p>
            <label for="prestation">Votre prestation:</label>
            <select id="Votre prestation">
                <option value="Prestation que vous souhaitez">Séance individuelle</option>
                <option value="Prestation que vous souhaitez">Séance en couple</option>
                <option value="Prestation que vous souhaitez">Mariage</option>
            </select>
        </p>
        <p>
            <input type="submit" name="envoyer" value="Envoyer">
            <input type="reset" name="reset" value="Effacer">
        </p>
    </fieldset>
</form> -->











<?php include('footer.php'); ?>