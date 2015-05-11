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
			<h4></h4>      
			<p></p>      
		</div>			 
	<div class="container">	
		<div class="">
			<div class="row ">
				<div class="col-xm-offset-1 col-Xm-10 jumbotron">
					<div> 
						<fieldset> 
							<!-- Form Name -->
							<legend>Selectionner</legend>
							
							<!-- Form Name -->
							<div class="form-group">
								<div class="row">
									<form action="ListeEleves.php" method="GET">
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
												//$sql = "SELECT c.nom FROM Classes c, professeurmatiereclasse pmc, professeurs p WHERE c.idprofesseurmatiereclasse=pmc.idprofesseurmatiereclasse AND p.idprofesseur = ".$_SESSION["IdUtilisateur"]." ";

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
							<input type="hidden" name="IddClasse" value="<?php 
							if(isset($_GET["IdClasse"]))
							{
								echo $_GET["IdClasse"];
							}  
							?>
								"/>																
							<form class="form-horizontal" method="GET" action="ListeEleves.php">
								<fieldset>
									<table class="table table-striped">
										<tr>
											<td> 
												<b>Nom</b>
											</td>
											<td> 
												<b>Prénom</b>
											</td>
											<td> 
												<b> Lien vers ses fiches </b>
											</td>		
										</tr>
										
										<?php
											$db = mysqli_connect('localhost', 'root', '');

											// on sélectionne la base
											mysqli_select_db($db,'gestionnotes');

											// on crée la requête SQL
											//$sql = "SELECT f.Nom,f.Prenom,f.idFiche FROM fiches f WHERE IdMatiere= ".$_GET["IdMatiere"]." AND IdEleve= ".$_SESSION["IdUtilisateur"]." ;";
											$sql = "SELECT * FROM Eleves WHERE IdClasse = ".$idclasse;
											
											// on envoie la requête
											$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

											while($data = mysqli_fetch_assoc($req))
											{
												echo "<tr>";
												echo "<td>";
												echo $data["Nom"];
												echo "</td>";
												echo "<td>";
												echo $data["Prenom"];
												echo "</td>";
												echo "<td>";
												echo "<b><a href=\"EleveFiches.php?IdFiche=".$data["idFiche"]."\"  name=\"button2id\" class=\"btn btn-info\">Lire</a>	 </b>";
												//echo "<b><a href=\"Fiche.php?IdFiche=".$data["idFiche"]."\"  name=\"button2id\" class=\"btn btn-info\">Lire</a>	 </b>";													echo "</td>";
											} 
										?>
									</table>		
								</fieldset>
							</form>
						</fieldset>						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
