<?php
session_start();
$_GET["login"];
$login=$_GET["login"];
echo $login;

$_GET["Mdp"];
$Mdp=$_GET["Mdp"];
echo $Mdp;

If ($login == "t" && $Mdp== "t")
{
	$_SESSION["Nom"] = "Admin";

	header("Location: MonEspace.php");
}

?>