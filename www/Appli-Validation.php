<?php
	$Nom= "";
	$Utilite= "";
	$Ajouter= "";
	$IdAppli= "";
	
	$Nom = $_GET['Nom'];
	$Utilite= $_GET['Utilite'];
	$Ajouter= $_GET['Ajouter'];
	$IdAppli=$_GET['IdAppli'];
	
	$db = mysqli_connect('localhost', 'root', '');

	// on sélectionne la base
	mysqli_select_db($db,'GestionNotes');

	// on crée la requête SQL
	$sql = "INSERT INTO Applis(Nom,Utilite,IdAppli)	VALUES('".$Nom."','".$Utilite."','".$IdAppli."');";

	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
 ?>