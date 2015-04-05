<?php
session_start();

	$Nom = $_GET['Nom'];
	$Prenom= $_GET['Prenom'];
	$Mdp= $POST['Mdp'];
	$Login= $_GET['Login'];
	$Validation=$_POST['Validation'];
	$Date= $_GET['Date'];
	$Classe= $_GET['IddClasse'];
	$Email= $_GET['Email'];
	
	if(isset($_GET["IdEleve"]))
	{
		$ideleve = $_GET["IdEleve"];
	} 
	else
	{
		$ideleve = "";
	}

	// Ou se trouve ma base ?
	$db = mysqli_connect('localhost', 'root', '');

	// on sélectionne la base
	mysqli_select_db($db,'gestionnotes');

	// on crée la requête SQL
	$sql = "SELECT e.Nom, e.Prenom,e.Login,e.Mdp,e.Validation,e.Email,e.Date,e.IdClasse FROM eleves e WHERE e.ideleve = ".$_SESSION["IdUtilisateur"]."";

	// on envoie la requête
	$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
	
	while($data = mysqli_fetch_assoc($req))
	{
		echo $data["Nom"];
		echo $data["Prenom"];
		echo $data["Login"];
		echo $data["Mdp"];
		echo $data["Validation"];
		echo $data["Date"];
		echo $data["IddClasse"];
		echo $data["Email"];
	} 

?>