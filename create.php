<?php
if (!isset($_POST['title']) || empty($_POST['title']) )

{
	echo('Il faut un titre  pour créer un produit');
    echo "<br><br><a href=\"home.php\"> Retour à l'accueil </a>";
    return;
}

if (!isset($_POST['description']) || empty($_POST['description']) )

{
	echo('Il faut une description  pour créer un produit');
    return;
    echo "<br><br><a href=\"home.php\"> Retour à l'accueil </a>";
}

if (!isset($_POST['price']) || empty($_POST['price'])|| !is_int(intval($_POST['price'])))

{
	echo('Il faut un prix   pour créer un produit');
    echo "<br><br><a href=\"home.php\"> Retour à l'accueil </a>";
    echo (gettype(intval($_POST['price'])));
    return;
}

if (!isset($_POST['city']) || empty($_POST['city']) )

{
	echo('Il faut un nom de ville  pour créer un produit');
    echo "<br><br><a href=\"home.php\"> Retour à l'accueil </a>";
    return;
}

if (!isset($_POST['postal_code']) || empty($_POST['postal_code'])|| !is_int(intval($_POST['postal_code'])) )

{
	echo('Il faut un code postal  pour créer un produit');
    echo "<br><br><a href=\"home.php\"> Retour à l'accueil </a>";
    return;
}


include_once('connectionBase.php');

// Ecriture de la requête :

$sqlQuery = 'INSERT INTO produit(title, description, price, city, postal_code) VALUES (:title, :description, :price, :city, :postal_code)';

//Préparation de la requête :

$insertProduct = $mysqlClient->prepare($sqlQuery);

// Exécution de la requête :

$insertProduct->execute([
    'title' => strip_tags($_POST['title']),
    'description' => strip_tags($_POST['description']),
    'price' => strip_tags($_POST['price']),
    'city' => strip_tags($_POST['city']),
    'postal_code' => strip_tags($_POST['postal_code']),
]);


include_once('index.php');


?>