<?php
//Page Acceuil
	session_start();	
?>
<html>
	<head>

		<title>Mon espace</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.js"></script>
		
		<style>
		.navbar-brand2
		{
			position: absolute;
			width: 100%;
			left: 0;
			text-align: center;
			margin: auto;
			margin-top:10px;
		}
		</style>
		
	</head>
  
	<body>
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
				</div>
				<a class="navbar-brand" href="index.php">Accueil</a>
			
				<div class="navbar-form navbar-left">
					<a href="MonProfil.php" class="btn btn-info">Elle me rend fou !</a>
				</div>
<<<<<<< HEAD
				<div href="MonProfil.php" class="navbar-brand2">Aide</div>
				<div  class="navbar-form navbar-right">
					<a href="deconnexion.php" class="btn btn-danger">Deconnexion</a>
		
				</div>
=======
				<div href="MonProfil.php" class="navbar-brand2">Aidez la siouplez !</div>
<form action="Connexion.php" method="GET" class="navbar-form navbar-right" role="search">
		<div class="form-group">
		  <input name="login" type="text" class="form-control" placeholder="login">
		      <input id="Mdp" name="Mdp" type="password" placeholder="mot de passe" class="form-control input-md">
		 
		</div>
		<input type="submit" class="btn-sd btn btn-info" value="connexion"/>
		<a href="inscription.php" class="btn btn-sd btn-success">Inscription</a>

	</form>
>>>>>>> origin/master

			</div>
		</nav>
		<div class="container jumbotron">
			elle est folle !
		</div>

	</body>
</html>