<?php
session_start();
$_GET["login"];
$login=$_GET["login"];
echo $login;

<<<<<<< HEAD
$_GET["Mdp"];
$Mdp=$_GET["Mdp"];
echo $Mdp;

If ($login == "t" && $Mdp== "t")
{
	$_SESSION["Nom"] = "Admin";

	header("Location: MonEspace.php");
}

=======
	if($login=="admin" && $password=="admin")
	{
		$_SESSION['Login'] = "Admin";
		echo "Oo".$_SESSION['Login'];
		header("Location: index.php");
	}
	else 
	{
		header("Location: Erreur.php");
	}
>>>>>>> origin/master
?>