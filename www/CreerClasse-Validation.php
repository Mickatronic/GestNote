 <?php
	$Nom= "";

	$Nom = $_GET['Nom'];

	$db = mysqli_connect('localhost', 'root', '');

	// on sélectionne la base
	mysqli_select_db($db,'GestionNotes');

	// on crée la requête SQL
	$sql = "INSERT INTO Classes(Nom) VALUES('".$Nom."');";

	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
 ?>