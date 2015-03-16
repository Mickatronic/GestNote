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
      <div class="navbar-brand" href="#">Mon espace</div>
    </div>
<?php
		if (isset ($_SESSION["Nom"]))
		{
	?>
	<div  class="navbar-form navbar-right" role="search">
		<a href="deconnexion.php" class="btn btn-danger">deconnexion</a>

	</div>
	
	<?php
	}
	else
	{
	?>
	
		<div class="navbar-form navbar-right"> 	
		<a href="Deconnexion.php" class="btn btn-info">Deconnexion</a>
		<a href="Aide.php" class="btn btn-warning">Aide</a>
		</div>
	
	<form action="MonEspace.php" method="GET" class="navbar-form nvbar-right" role="search">
		<div class="form-group">
		
		</div>
			<input type="submit" class="btn btn warning" value="Mon profil"/>
	</form>

	  
	<?php 
	}
	?>	  

	 
   </div>
   </nav>
  
  </body>
</html>