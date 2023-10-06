<?php
include('header.php');
?>

<form>
    <fieldset>
        <legend>
            <b>Formulaire de Contact</b>
        </legend>
        <p>
            <label for ="nom">Nom et Prénom:</label>
            <input id="nom" type="texte" name="nom" placeholder="Votre Nom" size="30">
        </p>
        <p>
            <label for ="prenom">Prénom</label>
            <input id="prenom" type="prenom" name="prenom" placeholder="Votre Prénom" size="30">
        </p>
       <p>
            <label for ="cp">Code Postal :</label>
            <input id="cp" type="cp" name="cp" placeholder="ex :38130" siez="30">
        </p>
        <p>
            <label for ="adresse">Adresse :</label>
            <input id="adresse" type="adresse" name="adresse" placeholder="Ex : Grenoble" size="30">
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