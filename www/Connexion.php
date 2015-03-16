<?php
session_start();

$login=$_GET["login"];
echo $login;



$Mdp=$_GET["Mdp"];
echo $Mdp;

if ($login == "t" && $Mdp== "t")
{
	$_SESSION["Nom"] = "Admin";

	header("Location: MonEspace.php");
}
else
{
	header("Location: Erreur.php");
}

?>