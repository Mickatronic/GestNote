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
      <a class="navbar-brand" href="Accueil.php">Accueil</a>
    </div>
	 <form class="navbar-form navbar-right" role="search">
	    
        <div class="form-group">
          <input type="text" class="form-control" placeholder="login">
		  <input type="text" class="form-control" placeholder="mot de passe">
        </div>
        <button type="submit" class="btn btn-info">Connexion</button>
		<button type="submit" class="btn btn-success">Inscription</button>
		
      </form>
   </div>
   </nav>
   <div class="container">
  <div class="row">
	<div class="col-sm-3">
		<div class="row">
			<div class="form-group">
				<label class="control-label">Nom: </label>
				<div class="input-group">
					<span class="input-group-addon" id="start-date"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" class="form-control" aria-describedby="start-date">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<label class="control-label">Prénom: </label>
				<div class="input-group">
				
					<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" aria-describedby="start-date" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<label class="control-label">Login: </label>
				<div class="input-group">
				
					<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
					<input type="text" aria-describedby="start-date" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<label class="control-label">Date: </label>
				<div class="input-group">
				
					<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
					<input type="text" aria-describedby="start-date" class="form-control" placeholder="jj/mm/aaaa">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
			  <label class="control-label" for="selectbasic">Classe: </label>
			  <div class="">
				<select id="selectbasic" name="selectbasic" class="form-control">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
			      <option value="5">5</option>
				</select>
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<label class="control-label">Adresse Mail</label>
				<div class="input-group">
				
					<span id="start-date" class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
					<input type="text" aria-describedby="start-date" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
			  <div class="col-md-12">
				<a href="espace1.php" name="button1id" class="btn btn-success">Inscription</a>
				<a href="index.php"  name="button2id" class="btn btn-danger">Annulation</a>
			  </div>  
			</div>
		</div>
	</div>
</div>

</div>

  </body>
</html>