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
				<div class="jumbotron">		 
					<div class="container">
						<div class="">
							<div class="row ">
								<div class="col-xm-offset-1 col-sm-9 jumbotron">
									<form action="Lire-Fiche.php" method="GET">
										<fieldset>
											<!-- Form Name -->
											<legend> Mes Fiches </legend>
											
											<!-- Select Basic -->
											<div class="form-group">
											  <label class="col-md-5 control-label" for="GénéralId">Général</label>
											  <div class="col-md-5">
												<select id="GénéralId" name="GénéralId" class="form-control">
												  <option value="1">Autre</option>
												  <option value="2">Maths</option>
												  <option value="">Anglais</option>
												  <option value="">Espagnol</option>
												  <option value="">Philosophie</option>
												  <option value="">Histoire</option>
												</select>
											  </div>
											</div>
											<!-- Select Basic -->
											<div class="form-group"> 
												<label class="col-md-5 control-label" for="TechnologiqueId">Techno</label>
												  <div class="col-md-5">
													<select id="TechnologiqueId" name="TechnologiqueId" class="form-control">
													  <option value="1">Autre</option>
													  <option value="2">Management</option>
													  <option value="">Economie</option>
													  <option value="">Droit</option>
													</select>
												  </div>
											</div>
											<!-- Select Basic -->
											<div class="form-group">
												<label class="col-md-5 control-label" for="SpecialiteId">Spécialité</label>
												  <div class="col-md-5">
													<select id="SpecialiteId" name="SpecialiteId" class="form-control">
													  <option value="1">Autre</option>
													  <option value="2">Système d'Information</option>
													  <option value="">Finance</option>
													  <option value="">Ressource Humaine</option>
													  <option value="">Mercatique</option>
													</select>
												  </div>
											</div>
											<div class="container">						
												<div class="row ">
													<div class="col-xm-offset-6 col-sm-8 jumbotron">
														<div class="row">
															<p>Ma Fiche<br/>
															<textarea name="contenu" rows="10" cols="50" >
															</textarea>
														</div>
														<!-- File Button --> 
														<div class="control-group">
														  <label class="control-label" for="AjouterId">Ajouter</label>
														  <div class="controls">
															<input id="AjouterId" name="AjouterId" class="input-file" type="file">
														  </div>
														</div>
														<!-- Button -->
														<div class="control-group">
														  <label class="control-label" for="CreerId"></label>
														  <div class="controls">
															<a href="CreerFiches.php" class="btn btn-warning">Modifier</a>
														  </div>
														</div>
													</div>
												</div>
											</div>
										</fieldset>										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</body>	
</html>