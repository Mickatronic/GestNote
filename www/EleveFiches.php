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
	<h4>Révise tes fiches</h4>      
	<p>...</p>      
	</div>			 
	<div class="container">
		<div class="">
			<div class="row ">
				<div class="col-xm-offset-1 col-Xm-10 jumbotron">
						<div> 
							<fieldset> 
								<!-- Form Name -->
								<legend>Mes Fiches</legend>
								
								<!-- Form Name -->
								<div class="form-group">
									<div class="row">
										<form action="EleveFiches.php" method="GET">
											<label class="col-md-2 control-label" for="SelectMatiere">Nom de la Matière</label>
											<div class="col-md-4">
												<select id="SelectMatiere" name="IdMatiere" class="form-control">
												<?php
													if(isset($_GET["IdMatiere"]))
													{
														$idmatiere = $_GET["IdMatiere"];
													} 
													else
													{
														$idmatiere = "";
													}
													$db = mysqli_connect('localhost', 'root', '');

													// on sélectionne la base
													mysqli_select_db($db,'gestionnotes');

													// on crée la requête SQL
													$sql = "SELECT m.Nom, m.IdMatiere FROM eleves e, classes c, matieres m WHERE e.idclasse=c.idClasse AND c.idClasse=m.idclasse AND e.ideleve = ".$_SESSION["IdUtilisateur"]." ";

													// on envoie la requête
													$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

													while($data = mysqli_fetch_assoc($req))
													{
														if($idmatiere== $data["IdMatiere"])
														{
															echo "<option value=\"".$data["IdMatiere"]."\" selected >".$data["Nom"]."</option>";
														}
														else
														{
															echo "<option value=\"".$data["IdMatiere"]."\">".$data["Nom"]."</option>";
														}
														
														
													} 
												?>
												</select>
											</div>
											<input type="submit" class="btn btn-warning" value="Raffraichir" name="Raffraichir" />
										</form>
									</div>
								</div>
								<form  action="EleveFiches.php" method="GET">
									<input type="hidden" name="IdMatiere" value="<?php 
									if(isset($_GET["IdMatiere"]))
									{
										echo $_GET["IdMatiere"];
									}  
									?>
											"/>
									<form class="form-horizontal" method="GET" action="Visualiser-Validation.php">
										<fieldset>
										<table class="table table-striped">
											<tr>
												<td> 
													<b>Thème</b>
												</td>
												<td> 
													<b>Chapitre</b>
												</td>
												<td> 
													<b> Lien vers ma fiche </b>
												</td>		
											</tr>
											
											<?php
												$db = mysqli_connect('localhost', 'root', '');

												// on sélectionne la base
												mysqli_select_db($db,'gestionnotes');

												// on crée la requête SQL
												$sql = "SELECT f.Theme,f.Chapitre,f.idFiche FROM fiches f WHERE IdMatiere= ".$_GET["IdMatiere"]." AND IdEleve= ".$_SESSION["IdUtilisateur"]." ;";
												$sql = "SELECT f.Theme,f.Chapitre,f.idFiche FROM fiches f WHERE IdMatiere= ".$_GET["IdMatiere"]." AND IdEleve= ".$_SESSION["IdUtilisateur"]." ;";

												// on envoie la requête
												$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

												while($data = mysqli_fetch_assoc($req))
												{
													echo "<tr>";
													echo "<td>";
													echo $data["Theme"];
													echo "</td>";
													echo "<td>";
													echo $data["Chapitre"];
													echo "</td>";
													echo "<td>";
													echo "<b><a href=\"Fiche.php?IdFiche=".$data["idFiche"]."\"  name=\"button2id\" class=\"btn btn-info\">Lire</a>	 </b>";
													echo "</td>";
												} 
											?>
										</table>		
									</form>
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
