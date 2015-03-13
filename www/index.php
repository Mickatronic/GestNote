<html>

  <head>
    <title>Page d'accueil</title>
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
      <a class="navbar-brand" href="#">Accueil</a>
    </div>
	 <form action="Connexion.php" method="GET" class="navbar-form navbar-right" role="search">
	    
        <div class="form-group">
          <input name="login" type="text" class="form-control" placeholder="login">
		  <input id="Mdp" name="Mdp" type="text" class="form-control" placeholder="mot de passe">
        </div>
        <button type="submit" class="btn btn-info">Connexion</button>
		<a href="inscription.php" class="btn btn-success">Inscription</a>
		
		
      </form>
   </div>
   </nav>
  
  </body>

</html>
