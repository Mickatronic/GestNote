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
			<legend>Lister Catégorie</legend>
			<form class="form-horizontal" method="GET" action="ListeCategorie.php">
				<fieldset>
					<table class="table table-striped">
						<tr>
							<td> 
								<b>IdAppliCatégorie</b>
							</td>
							<td> <b>Nom de la catégorie</b>
							</td>
						</tr>
						<?php
							$db = mysqli_connect('localhost', 'root', '');

							// on sélectionne la base
							mysqli_select_db($db,'gestionnotes');

							// on crée la requête SQL
							$sql = "SELECT * FROM ApplisCategories;";

							// on envoie la requête
							$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

							while($data = mysqli_fetch_assoc($req))
							{
								echo "<tr>";
								echo "<td>";
								echo $data["IdAppliCategorie"];
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