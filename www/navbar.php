
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand active" href="index.php">Accueil</a>
		</div>
		

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "Utilisateur" ;?><span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="MonEspace.php">Espace</a></li>
				<li><a href="MonProfil.php">Profil</a></li>
			  </ul>
			</li>
			<?php
			if(isset($_SESSION['Type']))
			{
				if($_SESSION['Type'] == "Administrateur")
				{
			?>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "Administration" ;?><span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="CreerClasse.php">Créer Classe</a></li>
				<li><a href="ListerClasse.php">Lister Classe</a></li>
				<li class="divider"></li>
				<li><a href="CreerMatiere.php">Créer Matiere</a></li>
				<li><a href="ListerMatiere.php">Lister Matiere</a></li>
				<li class="divider"></li>
				<li><a href="Applis.php">Ajouter Appli</a></li>
				<li><a href="Geretps.php">Gérer son temps</a></li>
				
			  </ul>
			</li>
			<?php
				}
			}
			?>
			  
			
			<?php
			if(isset($_SESSION['Type']))
			{
				if($_SESSION['Type'] == "Eleve")
				{
			?>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "Administration" ;?><span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="CreerFiches.php">Créer Fiches</a></li>
				<li><a href="VisualiserFiches.php">Visualiser Fiches</a></li>
				<li class="divider"></li>
				<li><a href="Geretps.php">Gérer son temps</a></li>
			  </ul>
			</li>
			<?php
				}
			}
			?>
			
			<?php
			if(isset($_SESSION['Type']))
			{
				if($_SESSION['Type'] == "Professeur")
				{
			?>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "Administration" ;?><span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="EleveFiches.php">Visualiser Fiches</a></li>
				<li class="divider"></li>
				<li><a href="Geretps.php">Gérer son temps</a></li>
			  </ul>
			</li>
			<?php
				}
			}
			?>
			
			
			
		</ul>
		  <?php
		  if(isset($_SESSION['Type']))
		  {
		  ?>
		  <div class="navbar-form navbar-right">
			<a href="Deconnexion.php" class="btn btn-danger btn-sm">Déconnexion</a>
		  </div>
		  
		  <?php
		  }
		  else
		  {
		  ?>
			<form action="Connexion.php" method="POST" class="navbar-form navbar-right" role="search">
				<div class="form-group">
				  <input type="text" name="login" class="form-control input-sm" placeholder="Pseudo">
				</div>
				<div class="form-group">
				  <input type="password" name="Mdp" class="form-control input-sm" placeholder="Mot de Passe">
				</div>
				<input type="submit" class="btn btn-primary btn-sm" value="Connexion"></input>
				<a href="Inscription.php" class="btn btn-success btn-sm">Inscription</a>
			</form>
		  
		  <?php
		  }
		 ?>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>