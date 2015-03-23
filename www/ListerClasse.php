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
							<td> <b>Nom de la classe</b>
							</td>
						</tr>
						<tr>
							<td> 
								1
							</td>
							<td> 
								TSTMG SIG
							</td>
						</tr>
						<tr>
							<td> 
								2
							</td>
							<td> 
								TES
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