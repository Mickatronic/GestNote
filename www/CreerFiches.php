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
	
	  </div>
	  			
<div class="container">
	<div class="jumbotron">
	<h4>Astuce :</h4>      
	<p>...</p>      
	</div>			 
	<div class="container">
		<div class="">
			<div class="row ">
				<div class="col-xm-offset-1 col-Xm-10 jumbotron">
						<div> 
							<fieldset> 
								<!-- Form Name -->
								<legend>Ma Fiche</legend>
								<!-- Form Name -->
								<div class="form-group">
									<div class="row">
										<form action="CreerFiches.php" method="GET">
											<label class="col-md-2 control-label" for="SelectClasse">Nom de la Classe</label>
											<div class="col-md-4">
												<select id="SelectClasse" name="IdClasse" class="form-control">
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
											<input type="submit" class="btn btn-success" value="Raffraichir" name="Raffraichir" />
										</form>
									</div>
								</div>
								<form  action="Fiche-validation.php" method="GET">
									<!-- Form Name -->
									<div class="form-group">
										<div class="row">
											<label class="col-md-2 control-label" for="SelectClasse">Nom de la Matiere</label>
											<div class="col-md-4">
												<select id="SelectClasse" name="Matiere" class="form-control">
												<?php
												$db = mysqli_connect('localhost', 'root', '');
												if(isset($_GET["IdClasse"]))
												{
													$idclasse = $_GET["IdClasse"];
												} 
												else
												{
													$idclasse = "";
												}
												// on sélectionne la base
												mysqli_select_db($db,'gestionnotes');
			
												// on crée la requête SQL
												$sql = "SELECT * FROM Matieres WHERE IdClasse = ".$idclasse;

												// on envoie la requête
												$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

												while($data = mysqli_fetch_assoc($req))
												{
													echo "<option value=\"".$data["IdMatiere"]."\">".$data["Nom"]."</option>";
												} 
											?>
											</select>
										</div>
									</div>
					
									<input type="hidden" name="IddClasse" value="<?php 
									if(isset($_GET["IdClasse"]))
									{
										echo $_GET["IdClasse"];
									}  
									?>
										"/>
									<!-- Text input-->
									<div class="row control-group">
										</br>
										<label class="col-md-2 control-label" for="ThèmeId">Thème</label>
										<div class="controls">
											<input id="ThèmeId" name="Theme" type="text" placeholder="Titre" class="input-xxlarge">						
										</div>
									</div>
									<!-- Text input-->
									<div class="row control-group">
										</br>
										<label class="col-md-2 control-label" for="ChapitreId">Chapitre</label>
										<div class="controls">
											<input id="ChapitreId" name="Chapitre" type="text" placeholder="Chapitre" class="input-xxlarge">			
										</div>
									</div>	
										<div class="container">
											<div class="row ">
												<div class="col-xm-offset-1 col-sm-8 jumbotron">
													<p>Ma Fiche<br/>
													<textarea name="Fiche" rows="10" cols="50" ></textarea>
													<!-- File Button --> 
													<div class="control-group">
													  <div class="controls">
														<br><input id="AjouterId" name="Ajouter" class="btn btn-inverse" type="file"></br>
													  </div>
													</div>
													<!-- Button -->
													<div class="control-group">
													  <label class="control-label" for="CreerId"></label>
													  <div class="controls">
														<input type="submit" value="Créer" class="btn btn-info"/>
													  </div>
													</div>
												</div>
											</div>
										</div>										
									</div>
								</form>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>