<?php


include_once('connectionBase.php');

// Ecriture de la requête :

$sqlQuery = 'SELECT * FROM produit ORDER BY id_produit DESC';

//Préparation de la requête :

$readProduit = $mysqlClient->prepare($sqlQuery);

// Exécution de la requête :

$readProduit->execute();

$produits = $readProduit->fetchAll();

foreach ($produits as $produits){
    echo "Produit numéro ".$produits['id_produit'].": ".strtoupper($produits['title'])." ".$produits['description']." ".$produits['price']."€ ".$produits['city']." ".$produits['postal_code']."    <a href=\"readOneProduct.php?produit=".$produits['id_produit']." \"> Consulter ce produit </a>  "." <br><br>";

}

?>