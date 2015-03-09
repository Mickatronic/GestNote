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
      <a class="navbar-brand active" href="#">Accueil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	    <?php
	    if(isset($_SESSION['Login']))
	    {
	    ?>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clients<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="CreerClient.php">Créer un Client</a></li>
            <li><a href="ListerClients.php">Lister les clients</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Documents<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="AjouterDocuments.php">Ajouter un documents</a></li>
            <li><a href="ListerDocuments.php">Lister les documents</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
		<?php 
		}
		?>
        <li><a href="#">Contact <span class="sr-only">(current)</span></a></li>
        <li><a href="#">A propos de</a></li>
        
      </ul>
	  
	  <?php
	  if(isset($_SESSION['Login']))
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
          <input type="text" name="login" class="form-control input-sm" placeholder="ex : mhonvault">
        </div>
		<div class="form-group">
          <input type="password" name="password" class="form-control input-sm" placeholder="ex ******">
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