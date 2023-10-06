<?php
// if (isset($_POST['ok'])) {
//     $nom= $_POST['nom'] ;
//     $prenom=$_POST['prenom'] ;
//     $cp =$_POST['cp'] ;
//     $adresse=$_POST['adresse'] ; 
// }


try 
{
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=itabase;charset=utf8',
        'soumey',
        'pass'
    );
}
catch (Exception $e)
{
    die('Erreur :' . $e->getMessage()); 
}
// function Query1($mysqlConnection) {
//     $Query1 = $mysqlConnection->prepare('SELECT * FROM customers') ; 
//     $Query1->execute(); 
//     $itabase = $Query1->fetchAll(); 
//     foreach ($itabase as $customers ) {
//         echo $customers['firstname'];
//         echo $customers['lastname'],'<br>' ;
//         echo $customers['address'],'<br>' ;
//         echo $customers['city'],'<br>' ;
//     }
// }
$query = $mysqlConnection->prepare("INSERT INTO customers (0, :nom, :prenom, :cp, :adresse)") ;
$query->execute( 
    array(
        "nom"=>$nom, 
        "prenom"=>$prenom, 
        "cp"=>$cp,
        "adresse"=>$adresse, 
    ) 
  
    );  
    foreach ($itabase as $customers ) {
                echo $customers['firstname'];
                echo $customers['lastname'],'<br>' ;
                echo $customers['address'],'<br>' ;
                echo $customers['city'],'<br>' ;; 
    }
    echo "Inscription Validé" ; 
    $reponse = $query->fetchAll(); 
    var_dump($reponse); 
?>
