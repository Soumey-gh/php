<?php 
$price = 200 ; 
$price1 = 300 ;
$discount = 10 ; 

function formatPrice(float $price) : string  {
   return number_format($price/100,2). "€" ; 
}

function priceHT(int $price) : string {
   return $price ; 
}

function discount(float $price, int $discount) {
   return $price - ($price* $discount/100)."€ après réduction" ; 
}
?>
