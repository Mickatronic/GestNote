<?php
//Page Acceuil
	session_start();	
?>
<html>
  <head>
    <title>Page d'accueil</title>
		  <?php
			include 'includes.html';
		  ?>
	
  </head>
  
  <body>
  <?php
	include 'navbar.php';
  ?>
  <div class="container">
	  <div class="jumbotron">
			<form class="form-horizontal" method="GET" action="CreerCategorie.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Créer Catégorie</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Nom de la catégorie :</label>  
				  <div class="col-md-4">
					<input id="textinput" name="Nom" placeholder="Ex : Révision" class="form-control input-md" type="text">
				  </div>
				</div>
				
				 <?php
					$Nom= "";

					$Nom = $_GET['Nom'];

					$db = mysqli_connect('localhost', 'root', '');

					// on sélectionne la base
					mysqli_select_db($db,'GestionNotes');

					// on crée la requête SQL
					$sql = "INSERT INTO ApplisCategories (Nom) VALUES('".$Nom."');";

					// on envoie la requête
					$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());

					// on ferme la connexion à mysql
					mysqli_close($db);
					
					//header('Location: index.php')
				 ?>
				
				<!-- Button (Double) -->
				<div class="form-group">
				  <div class="col-md-8 col-md-offset-5">
					<input type="submit" id="button1id" name="Creer" value="Créer" class="btn btn-success"/>
					<a class="btn btn-danger" href="index.php">Annuler</a>
				  </div>
				</div>
				
				</fieldset>
			</form>
	  </div>
  </div>
  </body>
</html>