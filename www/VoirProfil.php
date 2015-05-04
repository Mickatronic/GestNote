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
	  
	  <?php

						if(isset($_SESSION["IdUtilisateur"]))
						{
							$idutilisateur =$_SESSION["IdUtilisateur"];
						} 
						else
						{
							$idutilisateur = "";
						}

						// Ou se trouve ma base ?
						$db = mysqli_connect('localhost', 'root', '');

						// on sélectionne la base
						mysqli_select_db($db,'gestionnotes');

						// on crée la requête SQL
						$sql = "SELECT e.Nom, e.Prenom,e.Login,e.Mdp,e.Validation,e.Email,e.Date,e.IdClasse FROM eleves e WHERE e.ideleve = ".$_SESSION["IdUtilisateur"]."";
						
							if(isset($_SESSION['IdUtilisateur']))
							{
								if($_SESSION['IdUtilisateur'] == "Professeur")
								{	$sql = "SELECT p.Nom, p.Prenom,p.Login,p.Mdp,p.Email FROM professeurs p WHERE p.idprofesseur = ".$_SESSION["IdUtilisateur"]."";
								}
							}		
						// on envoie la requête
						$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
						
						while($data = mysqli_fetch_assoc($resultat))
						{
							
					
						
					
					?>
<div class="container">
		<div class="">
			<div class="row ">
				<div class="col-sm-offset-4 col-sm-5 jumbotron">
					<form action="VoirProfil.php" method="GET"> 
						<div class="row">
							<div class="form-group">
								<label class="control-label">Nom: </label>
								<div class="input-group">
									<span class="input-group-addon" id="start-date"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" name="Nom" class="form-control" value="<?php echo $data["Nom"]; ?>" aria-describedby="start-date">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Prénom: </label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" name="Prenom" aria-describedby="start-date" value="<?php echo $data["Prenom"]; ?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Login: </label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
									<input type="text" name="Login" aria-describedby="start-date" class="form-control" value="<?php echo $data["Login"]; ?>" />
								</div>
							</div>
						</div>
						
						<div class="row">
							<label class="control-label">Mot De Passe: </label>
							<div class="input-group">
								<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
								<input type="password" name="Mdp" class="form-control input-sm" value="<?php echo $data["Mdp"]; ?>">
							</div>
						</div>
						
						<div class="row">
							<div class="form-group">
								<br><label class="control-label">Validation: </label></br>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
									<input type="password" name="Validation" value="<?php echo $data["Validation"]; ?>"class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Date: </label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
									<input type="date" name="Date" aria-describedby="start-date" class="form-control" placeholder="jj/mm/aaaa">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label">Adresse Mail</label>
								<div class="input-group">
								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="text" name="Email" aria-describedby="start-date" class="form-control" value="<?php echo $data["Email"]; ?>>
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
	<?php 
	}
	?>
  </body>
</html>