<?php
//Page Acceuil
	session_start();	
?>
<html>
  <head>
    <title>Page d'accueil</title>
		  <?php
			include 'includes.html';
		  ?>
	
  </head>
  
  <body>
  <?php
	include 'navbar.php';
  ?>
	<div class="container">
		<div class="">
			<div class="row ">
				<div class="col-sm-offset-4 col-sm-5 jumbotron">
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
							<a href="MonEspace.php" name="button1id" class="btn btn-success">Inscription</a>
							<a href="index.php"  name="button2id" class="btn btn-warning">Annulation</a>			
						  </div>  
						</div>
					</div>
				</div>
			</div>
		</div> <!--Juimbo-->
	</div>
  </body>
</html>