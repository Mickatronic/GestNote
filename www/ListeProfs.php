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
			<fieldset>

			 <!-- Form Name -->
				<legend>Lister Professeurs</legend>
				<form class="form-horizontal" method="GET" action="CleerMatiere-Validation.php">
					<fieldset>
						<table class="table table-striped">
							<tr>
								<td> 
									<b>IdClasse</b>
								</td>
								<td> 
									<b>Nom de la classe</b>
								</td>
								<td> 
									<b>IdMatière</b>
								</td>
								<td> 
									<b>Nom de la matière</b>
								</td>
							</tr>
							
							<?php
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'gestionnotes');

								// on crée la requête SQL
								$sql = "SELECT c.IdClasse,c.nom NomClasse, m.Nom NomMatiere,m.idMatiere FROM Classes c, Matieres m WHERE c.idClasse = m.idClasse ORDER BY c.idClasse, m.idMatiere;";

								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

								while($data = mysqli_fetch_assoc($req))
								{
									echo "<tr>";
									echo "<td>";
									echo $data["IdClasse"];
									echo "</td>";
									echo "<td>";
									echo $data["NomClasse"];
									echo "</td>";
									echo "<td>";
									echo $data["idMatiere"];
									echo "</td>";
									echo "<td>";
									echo $data["NomMatiere"];
									echo "</td>";
									echo "</tr>";
								} 
							?>
						</table>		
					</fieldset>
				</form>
			</fieldset>
		</div>
    </div>
  </body>
</html>