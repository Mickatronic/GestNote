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
		<div class="">
			<div class="row ">
				<div class="col-sm-offset-4 col-sm-5 jumbotron">
					<form action="Inscription-validation.php" method="GET"> 
						<div class="row">
							<div class="form-group">
								<label class="control-label">Nom: </label>
								<div class="input-group">
									<span class="input-group-addon" id="start-date"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" name="Nom" class="form-control" placeholder="ex : tutu" aria-describedby="start-date">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Prénom: </label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" name="Prenom" aria-describedby="start-date" placeholder="ex : Mika" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Login: </label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
									<input type="text" name="Login" aria-describedby="start-date" class="form-control" placeholder="ex : Login" />
								</div>
							</div>
						</div>
						
						<div class="row">
							<label class="control-label">Mot De Passe: </label>
							<div class="input-group">
								<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
								<input type="password" name="Mdp" class="form-control input-sm" placeholder="ex : ******">
							</div>
						</div>
						
						<div class="row">
							<div class="form-group">
								<label class="control-label">Validation: </label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
									<input type="text" name="Validation" placeholder="ex : ******" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Date: </label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
									<input type="text" name="Date" aria-describedby="start-date" class="form-control" placeholder="jj/mm/aaaa">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  <label class="control-label" for="Classe">Classe: </label>
							  <div class="">
								<select id="selectbasic" name="Classe" class="form-control">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
							  </div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
							  <label class="control-label" for="Type">Type: </label>
							  <div class="">
								<select id="selectbasic" name="Type" class="form-control">
								  <option value="1">Professeur</option>
								  <option value="2">Eleve</option>
								</select>
							  </div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Adresse Mail</label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="text" name="Email" aria-describedby="start-date" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
						</div>
					</form>
				</div>
			</div>
		</div> <!--Juimbo-->
	</div>
  </body>
</html>