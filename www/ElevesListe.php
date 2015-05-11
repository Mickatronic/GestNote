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
				<legend>Lister Elèves</legend>
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
									<b>IdEleve</b>
								</td>
								<td> 
									<b>Nom</b>
								</td>
								<td> 
									<b>Prenom</b>
								</td>
							</tr>
							
							<?php
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'gestionnotes');

								// on crée la requête SQL
								$sql = "SELECT c.IdClasse,c.nom NomClasse, e.Nom, e.Prenom, e.idEleve FROM Classes c, Eleves e WHERE c.idClasse = e.idClasse ORDER BY c.idClasse, e.idEleve;";

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
									echo $data["idEleve"];
									echo "</td>";
									echo "<td>";
									echo $data["Nom"];
									echo "</td>";
									echo "</tr>";
									echo $data["Prenom"];
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