<?php
include('header.php'); 
?>


<?php
if (isset ($_POST['submit'])) {

    if (empty($_POST ['envoyer'])) {
        echo "Veuillez choisir le nombre de séance" ; 
    }
}
?> 
<h3> Merci de remplir le formulaire de contact pour finaliser le panier </h3>
<form>
    <fieldset>
        <legend>
            <b>Formulaire de Contact</b>
        </legend>
        <p>
            <label for ="nom">Nom et Prénom:</label>
            <input id="nom" type="texte" name="nom" placeholder="Votre Nom et Prénom" size="30">
        </p>
        <p>
            <label for ="email">Adresse mail:</label>
            <input id="email" type="email" name="email" placeholder="Votre adresse mail" size="30">
        </p>
       <p>
            <label for ="date">Date :</label>
            <input id="date" type="texte" name="date" placeholder="ex : le 12 septembre" size="30">
        </p>
        <p>
            <label for ="lieux">Lieux de la prestation :</label>
            <input id="lieux" type="texte" name="lieux" placeholder="Ex : Grenoble" size="30">
        </p>
        <p>
            <label for ="nom">Votre prestation:</label>
            <select id="Votre prestation"> 
                <option value="Prestation que vous souhaitez">Séance individuelle</option>
                <option value="Prestation que vous souhaitez">Séance en couple</option>
                <option value="Prestation que vous souhaitez">Mariage</option>
            </select>
        </p>
    </fieldset>
</form>

<?php include('cart.php') ; ?>

<?php include('footer.php'); ?>