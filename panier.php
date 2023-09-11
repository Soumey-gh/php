<?php
include('header.php'); 
?>

<?php
if (isset ($_POST ['envoyer'])) {

    if (empty($_POST ['nom'])) {
        echo "Veuillez saisir l'information demandé" ; 
    } elseif (empty ($_POST ['email'])) {
        echo "Veuillez saisir l'information demandé" ; 
    }
    } elseif (empty ($_POST ['date'])) {
         echo "Veuillez saisir l'information demandé";
    } elseif (empty ($_POST ['lieux'])) {
        echo "Veuillez saisir l'information demandé" ; 
    } elseif (empty ($_POST ['prestation'])) {
        echo "Veuillez saisir l'information demandé" ; 
    } else {
    $nom = $_POST ['nom'].'<br>' ;  
    echo "Nom du client :  $nom "; 
    $email = $_POST ['email'].'<br>' ; 
    echo " L'email du client $email" ; 
    $date = $_POST ['date'].'<br>' ; 
    echo "La date demandé : $date" ; 
    $lieux = $_POST ['lieux'].'<br>' ; 
    echo "Le lieux de la prestation est : $lieux" ; 
    $prestation = $_POST ['prestation'].'<br>' ; 
    echo "La prestation que le client prend : $prestation" ; 
    }




?>







<?php include('footer.php'); 