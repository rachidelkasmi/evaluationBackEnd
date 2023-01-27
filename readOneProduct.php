<?php

echo "<h2> Produit consulté :</h2>";

include_once('connectionBase.php');

// Ecriture de la requête :

$sqlQuery = 'SELECT * FROM produit WHERE id_produit=:id_produit';

//Préparation de la requête :

$readOneProduit = $mysqlClient->prepare($sqlQuery);

// Exécution de la requête :

$readOneProduit->execute([
    'id_produit'=> $_GET['produit'],
]);

$produit = $readOneProduit->fetchAll();

foreach($produit as $produit){
echo "Produit numéro ".$produit["id_produit"].": ".strtoupper($produit['title'])." ".$produit['description']." ".$produit['price']."€ ".$produit['city']." ".$produit['postal_code']." <br><br>";
}
if($produit['reservation_text']!== NULL){
    echo "Produit déjà réservé<br>";
    echo "Mon commentaire :".$produit['reservation_text'];

}elseif($produit['reservation_text']== NULL){
    echo "<h2>Réserver ce produit : </h2>";
    echo "<form method=\"post\" action=\"reserveProduit.php?produit=".$_GET['produit']."\">";
    echo "<textarea placeholder=\"Mon commentaire de réservation\" name=\"reservation_text\"></textarea><br><br>";
    echo "<button type=\"submit\">Valider la réservation</button>";

    
}


?>