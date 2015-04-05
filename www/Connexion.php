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
	$idEleve = 0;
	$cpt=0;
	while($data = mysqli_fetch_assoc($resultat))
	{
		$idEleve = $data["IdEleve"];
		$cpt++;
	} 

	if($cpt > 0)
	{
		// J'ai trouvé un élève !
		$_SESSION["Type"] = "Eleve";
		$_SESSION["IdUtilisateur"] = $idEleve;
		echo "eleve";
	}
	else
	{
		// C'est peut être un prof ?
		// On crée la requête SQL
		$sql = "SELECT * FROM professeurs WHERE login ='".$login."' and mdp = '".$Mdp."';";
		
		// On envoie la requête
		$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
		
		$cpt=0;
		$idProf = 0;
		while($data = mysqli_fetch_assoc($resultat))
		{
			$cpt++;
			$idProf = $data["IdProfesseur"];
		} 
		if($cpt>0)
		{
			// C'est un prof !!
			$_SESSION["Type"] = "Professeur";
			$_SESSION["IdProfesseur"] = $idProf;
			echo "to";
		}
		else
		{
			// C'est peut être un admin ?
			// On crée la requête SQL
			$sql = "SELECT * FROM administrateurs WHERE login ='".$login."' and mdp = '".$Mdp."';";
			
			// On envoie la requête
			$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
			
			$cpt=0;
			$idProf = 0;
			while($data = mysqli_fetch_assoc($resultat))
			{
				$cpt++;
				$idAdmin = $data["IdAdministrateur"];
			} 
			if($cpt>0)
			{
				// C'est un admin !!
				$_SESSION["Type"] = "Administrateur";
				$_SESSION["IdAdministrateur"] = $idAdmin;
				$_SESSION["Nom"] = "Admin";
				echo "to";
			}
		}
	}
	header("Location: index.php");





	?>