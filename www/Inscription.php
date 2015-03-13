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
      <a class="navbar-brand" href="index.php">Accueil</a>
    </div>
	 <form class="navbar-form navbar-right" role="search">
	    
        <div class="form-group">
          <input type="text" class="form-control" placeholder="login">
		  <input type="text" class="form-control" placeholder="mot de passe">
        </div>
        <button type="submit" class="btn btn-info">Connexion</button>
		<button type="submit" class="btn btn-success">Inscription</button>
		<button type="submit" class="btn btn-warning">Aide</button>
		
      </form>
   </div>
   </nav>
   <div class="container">
  <div class="row">
	<div class="col-sm-3">
	  <div class="form-group">
		<label class="control-label">Start:</label>
		<div class="input-group">
		
			<span class="input-group-addon" id="start-date"><span class="glyphicon glyphicon-star"></span></span>
			<input type="text" class="form-control" aria-describedby="start-date">
		</div>
		</div>
	</div>
</div>
</div>
  </body>
</html>