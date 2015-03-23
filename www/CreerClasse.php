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
			<form class="form-horizontal" method="GET" action="CleerClasse-Validation.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Créer Classe</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Nom de la classe :</label>  
				  <div class="col-md-4">
					<input id="textinput" name="Nom" placeholder="Ex : TSTMG SIG" class="form-control input-md" type="text">
				  </div>
				</div>

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