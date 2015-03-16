<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  
	  	    <a class="navbar-brand" href="Index.php">Accueil</a>

			
	  

	 
    </div>
<?php
		if (isset ($_SESSION["Nom"]))
		{
	?>
	<div class="navbar-brand2">Mon Espace</div>
	<div class="navbar-form navbar-left">
		<a href="MonProfil.php" class="btn btn-default">Mon Profil</a>
		
	</div>
	<div class="navbar-form navbar-left">
		<a class="col-xs-offset-1" href="Index.php"></a>
	</div>
	<div  class="navbar-form navbar-right" role="search">
		<a href="deconnexion.php" class="btn btn-danger">deconnexion</a>
		<a href="Aide.php" class="btn btn-warning">Aide</a>
	</div>
	
	<?php
	}
	else
	{
		
	?>
	<form action="Connexion.php" method="GET" class="navbar-form navbar-right" role="search">
		<div class="form-group">
		  <input name="login" type="text" class="form-control" placeholder="login">
		      <input id="Mdp" name="Mdp" type="password" placeholder="mot de passe" class="form-control input-md">
		 
		</div>
		<input type="submit" class="btn-sd btn btn-info" value="connexion"/>
		<a href="inscription.php" class="btn btn-sd btn-success">Inscription</a>
		<a href="Aide.php" class="btn btn-sd btn-warning">Aide</a>
	</form>

	
	
	<?php 
	}
	?>	  

	 
   </div>
   </nav>