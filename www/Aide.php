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
					<a href="MonProfil.php" class="btn btn-info">Mon Profil</a>
				</div>
				<div href="MonProfil.php" class="navbar-brand2">Aidez la siouplez !</div>
				<div  class="navbar-form navbar-right">
					<a href="deconnexion.php" class="btn btn-danger">Déconnexion</a>
		
				</div>

			</div>
		</nav>
	</body>
</html>