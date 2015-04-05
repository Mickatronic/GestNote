<?php
	session_start();
	// Déclaration des variables
	$Classe= "" ; // Type String 
	$IdMatiere= ""; 
	$Theme= ""; 
	$Chapitre= null; 
	$IdFiche= null; 
	$Fiche= "";
//	$Ajouter= 0; 
	
	$Classe = $_GET['IddClasse'];
	$IdMatiere= $_GET['Matiere'];
	$Theme= $_GET['Theme'];
	$Chapitre= $_GET['Chapitre'];
	$Fiche= $_GET['Fiche'];
//	$Ajouter= $_GET['Ajouter'];
	
	if(isset($_SESSION["IdUtilisateur"]))
	{
		$idEleve = $_SESSION["IdUtilisateur"] ;
	} 

	
	$db = mysqli_connect('localhost', 'root', '');
	
	// on sélectionne la base
	mysqli_select_db($db,'gestionnotes');
	
	// on crée la requête SQL
	// on concatène $nom et prénom dans $inscription
	$sql = " Select Fiches (IdClasse,IdEleve,IdMatiere,Theme,Chapitre,Ajouter,Fiche) VALUES('".$Classe."','".$idEleve."','".$IdMatiere."','".$Theme."','".$Chapitre."','".$Ajouter."','".$Fiche."');";
	
	// on envoie la requête
	$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
	
	//on ferme la connexion à mysql
	mysqli_close($db) ;
	
	header ('Location: VisualiserFiches.php');
	
						
 ?>