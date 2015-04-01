<?php
session_start();

$login=$_POST["login"];


$Mdp=$_POST["Mdp"];


// Ou se trouve ma base ?
$db = mysqli_connect('localhost', 'root', '');

// on sélectionne la base
mysqli_select_db($db,'gestionnotes');

// on crée la requête SQL
$sql = "SELECT * FROM eleves WHERE login ='".$login."' and Mdp = '".$Mdp."';";

// on envoie la requête
$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

?>