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
			<form class="form-horizontal" method="GET" action="CleerMatiere-Validation.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Cr�er Mati�re</legend>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="SelectClasse">Choisissez la classe</label>
				  <div class="col-md-4">
					<select id="SelectClasse" name="SelectClasse" class="form-control">
					<?php
							$db = mysqli_connect('localhost', 'root', '');

							// on s�lectionne la base
							mysqli_select_db($db,'gestionnotes');

							// on cr�e la requ�te SQL
							$sql = "SELECT * FROM Classes";

							// on envoie la requ�te
							$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

							while($data = mysqli_fetch_assoc($req))
							{
								echo "<option value=\"".$data["IdClasse"]."\">".$data["Nom"]."</option>";
							} 
						?>
					</select>
				  </div>
				</div>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Nom de la mati�re :</label>  
				  <div class="col-md-4">
					<input id="textinput" name="Nom" placeholder="Ex : Math�matique" class="form-control input-md" type="text">
				  </div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
				  <div class="col-md-8 col-md-offset-5">
					<input type="submit" id="button1id" name="Creer" value="Cr�er" class="btn btn-success"/>
					<a class="btn btn-danger" href="index.php">Annuler</a>
				  </div>
				</div>

				</fieldset>
			</form>
	  </div>
  </div>
  </body>
</html>