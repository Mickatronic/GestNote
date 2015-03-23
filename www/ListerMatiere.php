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
			<legend>Lister Matière</legend>
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
						<tr>
							<td> 
								1
							</td>
							<td> 
								TSTMG SIG
							</td>
							<td> 
								1
							</td>
							<td> 
								Français
							</td>
						</tr>
						<tr>
							<td> 
								1
							</td>
							<td> 
								TSTMG SIG
							</td>
							<td> 
								2
							</td>
							<td> 
								Mathématique
							</td>
						</tr>
						<tr>
							<td> 
								1
							</td>
							<td> 
								TSTMG SIG
							</td>
							<td> 
								2
							</td>
							<td> 
								Informatique
							</td>
						</tr>
<tr>
							<td> 
								2
							</td>
							<td> 
								TES1
							</td>
							<td> 
								3
							</td>
							<td> 
								Français
							</td>
						</tr>
						<tr>
							<td> 
								2
							</td>
							<td> 
								TES1
							</td>
							<td> 
								4
							</td>
							<td> 
								Mathématique
							</td>
						</tr>
						<tr>
							<td> 
								2
							</td>
							<td> 
								TES1
							</td>
							<td> 
								5
							</td>
							<td> 
								Economique et social
							</td>
						</tr>
					</table>
				

				</fieldset>
			</form>
		</fieldset>
	  </div>
  </div>
  </body>
</html>