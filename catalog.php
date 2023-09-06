<?php
$products = [
    [
        'nom' => 'Séance individuelle',
        'price' => '200',
        'tirage' => 70,
        'picture' => 'pics/girl.jpg'
    ],
    [
        'nom' => 'Séance en couple',
        'price' => '300',
        'tirage' => 150,
        'picture' => 'pics/couple.jpg'
    ],
    [
        'nom' => 'Mariage',
        'price' => '400',
        'tirage' => 200,
        'picture' => 'pics/solo.jpg'
    ],
];
?>
<?php include('header.php'); ?>
<h3><?php foreach ($products as $product) {
        echo $product;
    } ?>

