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
				  <label class="col-md-4 control-label" for="selectbasic">Choisissez la classe</label>
				  <div class="col-md-4">
					<select id="selectbasic" name="selectbasic" class="form-control">
					  <option value="1">TSTMG SIG</option>
					  <option value="2">TES1</option>
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