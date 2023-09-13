<?php 

function formatPrice( int $price) : string  {
   return  ($price); 
}

function pricettc($price) : string {
   return formatPrice($price); 
}

function priceHT($price) {
   $ht = (100* formatPrice($price))/(100+20) ; 
   return $ht ; 
}

function discount ($price, $discount) {
   return pricettc($price)-((pricettc($price)*$discount)/100) ; 
}