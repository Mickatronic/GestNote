<?php
	// Déclaration des variables
	$Nom= "" ; // Type String 
	$Prenom= ""; 
	$Login= ""; 
	$Mdp= null; 
	$Validation= null; 
	$Date= 0; 
	$Classe= null; 
	$Type= null;  
	$Email= null; 

	$Nom = $_GET['Nom'];
	$Prenom= $_GET['Prenom'];
	$Mdp= $_GET['Mdp'];
	$Login= $_GET['Login'];
	$Validation= $_GET['Validation'];
	$Date= $_GET['Date'];
	$Classe= $_GET['Classe'];
	$Type= $_GET['Type'];
	$Email= $_GET['Email'];
	

	
	$db = mysqli_connect('localhost', 'root', '');
	
	// on sélectionne la base
	mysqli_select_db($db,'gestionnotes');
	
	// on crée la requête SQL
	// on concatène $nom et prénom dans $inscription
	
	


	
	If ($Nom=="") {
	header ('Location :erreur.php');
	}
	
	If ($Prenom=="") {
	header ('Location :erreur.php');
	}
	
	If ($Login=="") {
	header ('Location :erreur.php');
	}
	
	If ($Mdp!=$Validation) {
	header ('Location :erreur.php');
	}
	
	If ($Date=="") {
	header ('Location :erreur.php');
	}
	
	If ($Classe=="") {
	header ('Location :erreur.php');
	}
	
	If ($Email=="") {
	header ('Location :erreur.php');
	}
	
	If (Type==2) {
		$sql = "Insert Into Eleves (Nom,Prenom,Login,Mdp,Validation,Date,idClasse,Type,Email) VALUES('".$Nom."','".$Prenom."','".$Login."','".$Mdp."','".$Validation."','".$Date."','".$Classe."','".$Type."','".$Email."');";
	
	} else {
		$sql = "Insert Into Professeuur (Nom,Prenom,Login,Mdp,Validation,Date,Email) VALUES('".$Nom."','".$Prenom."','".$Login."','".$Mdp."','".$Validation."','".$Date."','".$Email."');";
	}
	mysqli_query_ ($sql)
	

		// on envoie la requête
	$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
	
	//on ferme la connexion à mysql
	mysqli_close($db) ;
 ?>