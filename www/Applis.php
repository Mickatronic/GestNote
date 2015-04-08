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
			<form class="form-horizontal" method="GET" action="Appli-Validation.php">
				<fieldset>

					<!-- Form Name -->
					<legend>Mettre une application</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Nom de l'Appli :</label>  
					  <div class="col-md-4">
						<input id="textinput" name="Nom" placeholder="Nom" class="form-control input-md" type="text">
					  </div>
					</div>
					<!-- Textarea -->
					<div class="container">
					<div class="row ">
							<div class="col-xm-offset-1 col-sm-8 jumbotron">
								<p>Explications<br/>
								<textarea name="Utiliter" rows="10" cols="50" ></textarea>
							</div>
						</div>
					</div>
					<!-- File Button --> 
					<div class="control-group">
					  <div class="controls">
						<br><input id="AjouterId" name="Ajouter" class="btn btn-inverse" type="file"></br>
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