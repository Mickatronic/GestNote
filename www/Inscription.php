<html>
	<head>
		<?php include 'includes.html';?>
	</head>
	<body>
		<?php include 'navbar.php';?>
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
					Menu
				</div>
				<div class="col-sm-11">
					<div class="row">
						<legend>Inscription</legend>
						<form method="POST" action="Inscription-validation.php" class="col-sm-12 jumbotron">
							<div class="row">
								<div class="col-sm-6">
									<div class="row">
										<div class="form-horizontal">
											
											<div class="form-group">
											  <label class="col-sm-2 control-label" for="textinput">Nom:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
												<input id="Nom" name="Nom" placeholder="ex : Honvault" class="form-control input-md" type="text"/>
											  </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-horizontal">
											
											<div class="form-group">
											  <label class="col-sm-2 control-label" for="textinput">Login:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
												<input id="Login" name="Login" placeholder="ex : mhonvault" class="form-control input-md" type="text"/>
											  </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-horizontal">
											
											<div class="form-group">
											  <label class="col-sm-2 control-label" for="textinput">Mdp:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-lock"></span></span>
												<input id="Mdp2" name="Mdp2" placeholder="ex : *****" class="form-control input-md" type="password"/>
											  </div>
											</div>
										</div>
									</div>							
									<div class="row">
										<div class="form-horizontal">
											
											<div class="form-group">
											  <label class="col-sm-2 control-label" for="textinput">Email:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
												<input id="Email2" name="Email2" placeholder="ex : mhonvault" class="form-control input-md" type="text"/>
											  </div>
											</div>
										</div>
									</div>						
								</div>
								<div class="col-sm-6">
									<div class="row">
										<div class="form-horizontal">
											
											<div class="form-group">
											  <label class="col-sm-3 control-label" for="textinput">Prénom:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
												<input id="Nom" name="Nom" placeholder="ex : Honvault" class="form-control input-md" type="text"/>
											  </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-horizontal">
											
											<div class="form-group">
											  <label class="col-sm-3 control-label" for="textinput">Age:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
												<input id="Age" name="Age" placeholder="ex : 26" class="form-control input-md" type="text"/>
											  </div>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="form-horizontal">
											
											<div class="form-group">
											  <label class="col-sm-3 control-label" for="textinput">Confirmer le Mdp:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-lock"></span></span>
												<input id="Mdp1" name="Mdp1" placeholder="ex : " class="form-control input-md" type="password"/>
											  </div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-horizontal">
												
											<div class="form-group">
											  <label class="col-sm-3 control-label" for="textinput">Confirmer l'email:</label>  
											  <div class="col-sm-8 input-group">
												<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
												<input id="Email1" name="Email1" placeholder="ex : mhonvault@gmail.com" class="form-control input-md" type="text"/>
											  </div>
											</div>
										</div>
									</div>							
								</div>
							</div>
							<div class="row">
								</br></br>
								<div class="form-group col-sm-offset-4">
									<div class="col-sm-8">
										<input type="submit" id="Inscription" name="Inscription" class="btn btn-lg btn-success col-sm-offset-1" value="Inscription"/>
										<a href="Accueil.php" class="btn btn-lg btn-danger col-sm-offset-1">Annuler</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
	<footer>
	</footer>
</html>
