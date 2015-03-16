<html>
    <head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.js"></script>

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
					<a class="navbar-brand" href="Index.php">Accueil</a>

				</div>
			
				<div class="navbar-form navbar-left">
					<a href="MonProfil.php" class="btn btn-info">Mon Profil</a>

				</div>

				<ul class="nav navbar-nav">
				<li>
				<div class="navbar-brand col-lg-offset-2 invisible" >blablabl</div>
				</li>
								<li>
				<div class="navbar-brand col-lg-offset-2" >Aide</div>
				</li>
				</ul>
				
				


				<form action="Connexion.php" method="GET" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input name="login" type="text" class="form-control" placeholder="login"/>
						<input id="Mdp" name="Mdp" type="password" placeholder="mot de passe" class="form-control input-md"/>
					</div>
					<input type="submit" class="btn-sd btn btn-info" value="connexion"/>
					<a href="inscription.php" class="btn btn-sd btn-success">Inscription</a>

				</form>
			</div>
		</nav>
	</body>
</html>

	
	
