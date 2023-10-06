<?php 

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

function Query1($mysqlConnection) {
$Query1 = $mysqlConnection->prepare('SELECT * FROM customers') ; 
$Query1->execute(); 
$itabase = $Query1->fetchAll(); 
$liste=[];
foreach ($itabase as $customers ) {
    $liste += $customers['firstname'];
    $liste+= $customers['lastname'];
    $liste +=$customers['address'];
    $liste+= $customers['city'];
}
return $liste;
}

Query1($mysqlConnection) ; 

function Query2($mysqlConnection) {
    $Query2 = $mysqlConnection->prepare('SELECT * FROM orders') ; 
    $Query2->execute(); 
    $itabase = $Query2->fetchAll(); 
    foreach ($itabase as $orders ) {
        echo $orders['date'],' / '.'Le numéro de commande est :' ;
        echo $orders['number'],'<br>' ;
    }
    }
    
    Query2($mysqlConnection);

function Query3($mysqlConnection) {
$Query3 = $mysqlConnection->prepare('SELECT * FROM orders WHERE date ="2023-09-20" ORDER BY number DESC') ; 
$Query3->execute(); 
$itabase = $Query3->fetchAll(); 
foreach ($itabase as $orders ) {
    echo $orders ['date'] ;
}
}
Query3($mysqlConnection);


function Query4($mysqlConnection) {
    $Query4 = $mysqlConnection->prepare('SELECT * FROM orders WHERE orders.total BETWEEN  100 and 550') ; 
    $Query4->execute(); 
    $itabase = $Query4->fetchAll(); 
    foreach ($itabase as $orders ) {
        echo $orders ['total'] ;
    }
    }
    Query4($mysqlConnection);
    
?>