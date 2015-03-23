<?php
//Page Acceuil
	session_start();	
?>
<html>
  <head>
    <title>Page notes</title>
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
		<center><h3>Ajout des notes</h3></center>      
		<p></p>      
	  </div> 
	</div>
    <div class="container">
	    <div class="jumbotron">
		    <div class="row">
				<form action="CreerNotes.php" method="GET">
					<div class="col-md-3">
						<div class="control-group">
						  <label class="control-label" for="IdClasse">Classe :</label>		
							<div class="controls">
								<select id="selectbasic" name="IdClasse" class="input-xxlarge">
								<?php
									// Ou se trouve ma base ?
									$db = mysqli_connect('localhost', 'root', '');

									// on sélectionne la base
									mysqli_select_db($db,'gestionnotes');

									// ProfesseurMatiere + ProfesseurMatiereClasse
									
									// on crée la requête SQL
									$sql = "
									SELECT c.IdClasse, Nom 
									FROM ProfesseurMatiere PM, ProfesseurMatiereClasse PMC, Classes c 
									WHERE PMC.IdProfesseurMatiere=PM.IdProfesseurMatiere
									AND c.IdClasse = PMC.IdClasse
									AND PM.IdProfesseur = ".$_SESSION["IdProfesseur"].";";
									
									// on envoie la requête
									$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
									
									$idClasseASelectionner = 0;
									if(isset($_GET["IdClasse"]))
									{
										$idClasseASelectionner = $_GET["IdClasse"]; 
									}
									
									
									while($data = mysqli_fetch_assoc($resultat))
									{
										if($idClasseASelectionner==$data["IdClasse"])
										{
											echo "<option value=\"".$data["IdClasse"]."\" selected=\"selected\" >".$data["Nom"]."</option>";
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
					<div class="col-md-3">
						<div class="control-group">
							<label class="control-label" for="IdMatiere">Matières :</label>
							  <div class="controls">
								<select id="IdMatiere" name="IdMatiere" class="input-xxlarge">
								  <?php
									// Ou se trouve ma base ?
									$db = mysqli_connect('localhost', 'root', '');

									// on sélectionne la base
									mysqli_select_db($db,'gestionnotes');
									
									$idClasseASelectionner = 0;
									if(isset($_GET["IdClasse"]))
									{
										$idClasseASelectionner = $_GET["IdClasse"]; 
									}
									
									$sql = "SELECT m.IdMatiere,m.Nom FROM matieres m, professeurs p, professeurMatiere PM, classes c
										WHERE p.idprofesseur = pm.idprofesseur
										AND pm.idMatiere = m.idMatiere
										AND c.IdClasse = m.idClasse 
										AND p.idProfesseur =  ".$_SESSION["IdProfesseur"].
										" AND c.idClasse =".$idClasseASelectionner.";";
										
									// on envoie la requête
									$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
									
									while($data = mysqli_fetch_assoc($resultat))
									{
										echo "<option value=\"".$data["IdMatiere"]."\">".$data["Nom"]."</option>";
									} 
								  ?>
								
								</select>
							  </div>
						</div>	
					</div>	
					<div class="col-md-3">	
						<div class="control-group">
							<label class="control-label" for="idEleve">Eleve:</label>
							  <div class="controls">
								<select id="selectbasic" name="idEleve" class="input-xxlarge">	
								 <?php
									// Ou se trouve ma base ?
									$db = mysqli_connect('localhost', 'root', '');

									// on sélectionne la base
									mysqli_select_db($db,'gestionnotes');
									
									$idClasseASelectionner = 0;
									if(isset($_GET["IdClasse"]))
									{
										$idClasseASelectionner = $_GET["IdClasse"]; 
									}
									
									$sql = "SELECT idEleve, nom, prenom FROM eleves e where e.IdClasse = ".$idClasseASelectionner;
									
									// on envoie la requête
									$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
									
									while($data = mysqli_fetch_assoc($resultat))
									{
										echo "<option value=\"".$data["idEleve"]."\">".$data["nom"]." ".$data["prenom"]."</option>";
									} 
								 ?>
								</select>
							  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="control-group">
						  <label class="control-label" for="Note">Note</label>
							<div class="controls">
							 <input id="NoteId" name="Note" type="text" placeholder="ex: 10,5" class="input-xxlarge">    
							</div>
						</div>
					</div>	
					<input type="submit" value="Actualiser" class="btn btn-info" />
				</form>
				<form method="POST" action="CreerNote-Validation.php">
					<?php
						$ClasseId = 0;
						$EleveId = 0;
						$MatiereId = 0;
						$Note = 0;
						if(isset($_GET['IdClasse']))
						{
							$ClasseId = $_GET['IdClasse'];
						}
						
						if(isset($_GET['idEleve']))
						{
							$EleveId = $_GET['idEleve'];
						}
						
						if(isset($_GET['IdMatiere']))
						{
							$MatiereId = $_GET['IdMatiere'];
						}
						
						if(isset($_GET['Note']))
						{
							$Note = $_GET['Note'];
						}
						
						echo "<input type=\"hidden\" name=\"ClasseId\" value=\"".$ClasseId."\" />";
						echo "<input type=\"hidden\" name=\"EleveId\" value=\"".$EleveId."\" />";
						echo "<input type=\"hidden\" name=\"MatiereId\" value=\"".$MatiereId."\" />";
						echo "<input type=\"hidden\" name=\"Notes\" value=\"".$Note."\" />";
						echo "<input type=\"submit\" value=\"Créer Note\" class=\"btn btn-success\" />";
					?>
				</form>
			</div>		
		</div>		
	</div>