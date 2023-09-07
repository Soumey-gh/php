<?php include ('header.php') ?>

<?php 
 $tirage = 'nombre de tirage' ; 
 $prix = 5 ; 

 function tarifHT ($tirage, $prix) {
    $totalHT = $tirage * $prix ; 
    return $totalHT ; 
 }
echo tarifHT (20,5)
?>

<?php

function tarifTTC($tirage, $prix) : int {
    $totalHT = $tirage * $prix ; 
    $totalTTC = $totalHT + $totalHT ; 
    return $totalTTC ; 
}
echo tarifTTC(40,5)
?>

<?php include ('footer.php') ?>