<?php

if (!isset($_POST['reservation_text']) || empty($_POST['reservation_text']) )

{
	echo('Il faut un commentaire  pour créer un produit');
    echo "<br><br><a href=\"home.php\"> Retour à l'accueil </a>";
    return;
}

 echo "Produit numéro ".$_GET['produit']." réservé";

 echo "<h3> Mon commentaire :</h3>".$_POST['reservation_text'];

 include_once('connectionBase.php');

 // Ecriture de la requête :

 $sqlQuery = 'UPDATE produit SET reservation_text=:reservation_text WHERE id_produit=:id_produit';

 //Préparation de la requête :

 $insertText = $mysqlClient->prepare($sqlQuery);


$insertText->execute([
    'id_produit' => $_GET['produit'],
    'reservation_text' => $_POST['reservation_text'],
]);


 echo "<br><br><a href=\"index.php\"> Retour à l'accueil </a>";














?>