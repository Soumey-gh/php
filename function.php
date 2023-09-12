 <?php

function getproducts () {
    return [
                [
                    "id" => '1',
                    'nom' => 'Appareil',
                    'price' => '200',
                    'picture' => 'pics\app.png',
                ],
                [
                    "id" => '2',
                    'nom' => 'Location de matériel',
                    'price' => '300',
                    'discount' => '10',
                    'picture' => 'pics\materiel.png',
                ],
                [
                    "id" => '3',
                    'nom' => 'Drone',
                    'price' => '400',
                    'discount' => '20',
                    'picture' => 'pics\drone.png',
                ],
            ];
    } 
 
    
function products ($id) {
$products = getProducts () ; 
foreach ($products as $product ) {
    if ( $product ['id'] == $id ) {
        return $product ; 
    }
}
var_dump($id) ; 
}
?>


       
