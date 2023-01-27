<?php try
{
	
	$mysqlClient = new PDO('mysql:host=localhost:3308;dbname=myshop;charset=utf8', 'root', 'root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


?>