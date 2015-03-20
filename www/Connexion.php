<?php
session_start();

$login=$_POST["login"];
echo $login;



$Mdp=$_POST["Mdp"];
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