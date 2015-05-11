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
				<legend>Lister Classe</legend>
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
							</tr>
							<?php
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'gestionnotes');

								// on crée la requête SQL
								$sql = "SELECT * FROM Classes;";

								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

								while($data = mysqli_fetch_assoc($req))
								{
									echo "<tr>";
									echo "<td>";
									echo $data["IdClasse"];
									echo "</td>";
									echo "<td>";
									echo $data["Nom"];
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