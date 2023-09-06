<?php
    $products = [
        [
            'nom' => 'Séance individuelle',
            'price'=> '200', 
            'tirage' => 70, 
            'picture' => 'pics/girl.jpg'
        ], 
        [
            'nom' => 'Séance en couple',
            'price'=> '300', 
            'tirage' => 150, 
            'picture' => 'pics/couple.jpg'
        ], 
        [
            'nom' => 'Mariage',
            'price'=> '400', 
            'tirage' => 200, 
            'picture' => 'pics/solo.jpg'
        ], 
    ] ; 
    
    include ('header.php') ;
?>

    <div>
        <?php foreach($products as $product): ?>
        <h3><?php echo $product ['nom']?></h3>
        <P><?php echo $product ['prix'][3]?></P>
        <img src=<?php $product ['picture']?>/>
    </div> 

<<?php include('footer.php'); ?>