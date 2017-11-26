<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=ecommerce_db', 'eCom_user', 'eCom_user');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arréte tout
        die('Erreur : '.$e->getMessage());
}
?>