<?php
include('header.php');
include('functions_price.php');
include('function.php');

?>



<h3> Finaliser le panier </h3>

<?php
$productid = (int)$_POST['idpanier'];
// $products = products($productid);
$quantite = $_POST['quantite'];
// echo $productid ; 
// echo $quantite; 
$produits = getproducts();
$produit = $produits[$productid];
$totalpanier =  $produit['price'] * $quantite;
// echo $produit ; 
// var_dump($products) ; 
?>


<form action="panier.php" method="post">
<div>
    <table>
        <thead>
            <tr>
                <th> Produits</th>
                <th> Prix </th>
                <th> Quantité</th>
                <th> Total</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th> <?php echo $produit['nom'] ?> </th>
                <td> <?php echo $produit['price'] ?> </td>
                <td> <?php echo $quantite ?> </td>
                <td><?php echo  $totalpanier ?></td>    
            </tr>
        </tbody>
        </thead>

    </table>
    </div>
</form>

<?php include('footer.php'); ?>