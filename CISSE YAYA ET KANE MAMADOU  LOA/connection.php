<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


?>