<?php
	$Nom= "";
	$Prenom= "";
	$Login= "";
	$Mdp= "";
	$Validation= "";
	$Date= "";
	$Classe= "";
	$Type= "";
	$AdresseMail= "";

	$Nom = $_GET['Nom'];
	$Prenom= $_GET['Prenom'];
	$Mdp= $_GET['Mot de Passe'];
	$Login= $_GET['Login'];
	$Validation= $_GET['Validation'];
	$Date= $_GET['Date'];
	$Classe= $_GET['Classe'];
	$Type= $_GET['Type'];
	$AdresseMail= $_GET['Email'];
	

	
	$db = mysqli_connect('localhost', 'root', '');
	// on sélectionne la base
	mysqli_select_db($db,'gestionnotes');
	// on crée la requête SQL
	
	$sql = "Insert Into Eleve(Nom,Prenom,Login,Mdp,Validation,Date,Classe,Type,AdresseMail) VALUES('".$Nom."','".$Prenom."'".$Login."','".Mdp."','".$Validation."''".$Date."','".$Classe."''".$Login."','".$Type."','".$AdresseMail."');";
	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
	// on ferme la connexion à mysql
	mysqli_close($db);
	
	//header('Location: index.php')

 ?>