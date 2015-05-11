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
		<h4>Deviens efficace en gérant ton temps</h4>      
		<p>...</p>      
		</div>			 
		<div class="container">
			<div class="">
				<div class="row ">
					<div class="col-xm-offset-1 col-Xm-10 jumbotron">						 
						<fieldset> 
							<!-- Form Name -->
							<legend>Trouve l'appli qui te convient</legend>
							
							<!-- Form Name -->
							<div class="form-group">
								<div class="row">
									<form action="VoirApplis.php" method="GET">
										<label class="col-md-2 control-label" for="SelectApplis">Catégorie</label>
										<div class="col-md-4">
											<select id="SelectApplis" name="IdAppli" class="form-control">
											<?php
												if(isset($_GET["IdAppli"]))
												{
													$idappli = $_GET["IdAppli"];
												} 
												else
												{
													$idappli = "";
												}
												$db = mysqli_connect('localhost', 'root', '');

												// on sélectionne la base
												mysqli_select_db($db,'gestionnotes');

												// on crée la requête SQL
												$sql = "SELECT a.Nom FROM applis a ";

												// on envoie la requête
												$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

												while($data = mysqli_fetch_assoc($req))
												{
													if($idmatiere== $data["IdAppli"])
													{
														echo "<option value=\"".$data["IdAppli"]."\" selected >".$data["Nom"]."</option>";
													}
													else
													{
														echo "<option value=\"".$data["IdAppli"]."\">".$data["Nom"]."</option>";
													}
													
													
												} 
											?>
											</select>
										</div>
										<input type="submit" class="btn btn-warning" value="Raffraichir" name="Raffraichir" />
									</form>
								</div>
							</div>
							<form  action="Visualiser-validation.php" method="GET">
								<input type="hidden" name="IdAppli" value="<?php 
								if(isset($_GET["IdAppli"]))
								{
									echo $_GET["IdAppli"];
								}  
								?>
										"/>
							
							<div class="container">
								<div class="row ">										
									<form  action="VoirApplis-validation.php" method="GET">
										<input type="hidden" name="IdAppli" value="<?php 
										if(isset($_GET["IdAppli"]))
										{
											echo $_GET["IdAppli"];
										}  
										?>
												"/>
										<form class="form-horizontal" method="GET" action="ListeApplis.php">
											<fieldset>
												<table class="table table-striped">
													<tr>
														<td> 
															<b>Nom</b>
														</td>
														<td> 
															<b>Utiliter</b>
														</td>
														<td> 
															<b> Liste d'Applis </b>
														</td>		
													</tr>
													
													<?php
														$db = mysqli_connect('localhost', 'root', '');

														// on sélectionne la base
														mysqli_select_db($db,'gestionnotes');

														// on crée la requête SQL
														//$sql = "SELECT f.Theme,f.Chapitre,f.idFiche FROM fiches f WHERE IdMatiere= ".$_GET["IdMatiere"]." AND IdEleve= ".$_SESSION["IdUtilisateur"]." ;";
														$sql = "SELECT a.Nom,a.Utilite FROM Applis a";

														// on envoie la requête
														$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

														while($data = mysqli_fetch_assoc($req))
														{
															echo "<tr>";
															echo "<td>";
															echo $data["Nom"];
															echo "</td>";
															echo "<td>";
															echo $data["Utilite"];
															echo "</td>";
															echo "<td>";
															echo "<b><a href=\"ListeApplis.php?VoirApplis=".$data["VoirApplis"]."\"  name=\"button2id\" class=\"btn btn-info\">Lire</a> </b>";
															echo "</td>";
														} 
													?>
												</table>
											</fieldset>	
										</form>			
									</form>										
								</div>
							</div>								
						</fieldset>	
					</div>	
				</div>
			</div>
		</div>
	</div>
 </body>
</html> 
	