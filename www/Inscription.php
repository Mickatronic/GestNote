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
									<input type="text" name="Nom" class="form-control" placeholder="ex :*****" aria-describedby="start-date">
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
								<input type="password" name="Mdp" class="form-control input-sm">
							</div>
						</div>
						
						<div class="row">
							<div class="input-group">
								<label class="control-label">Validation: </label>
								<div class="input-group">								
									<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
									<input type="password" name="Validation" class="form-control input-sm" >
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
								 <?php
								if(isset($_GET["IdClasse"]))
								{
									$idclasse = $_GET["IdClasse"];
								} 
								else
								{
									$idclasse = "";
								}
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'gestionnotes');

								// on crée la requête SQL
								$sql = "SELECT * FROM Classes";

								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

								while($data = mysqli_fetch_assoc($req))
								{
									if($idclasse == $data["IdClasse"])
									{
										echo "<option value=\"".$data["IdClasse"]."\" selected >".$data["Nom"]."</option>";
									}
									else
									{
										echo "<option value=\"".$data["IdClasse"]."\">".$data["Nom"]."</option>";
									}
									
									
								} 
								?>
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
							<div class="form-group">
							  <center><div class="col-md-12">
							  <input type="submit" value="Inscription" class="btn btn-success"/>
								<a href="index.php"  name="button2id" class="btn btn-danger">Annulation</a>			
							  </div></center>  
							</div>
						</div>
					</form>
				</div>
			</div>
		</div> <!--Juimbo-->
	</div>
  </body>
</html>