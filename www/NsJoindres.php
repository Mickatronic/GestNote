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
			<!-- Form Name -->
			<legend>Bienvenue sur Panda-Ko</legend>	  
			<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


			<div class="container">
				<div class="row">
					<form action="NsJoindres.php" method="GET">
						<div class="col-md-4">
							<!-- begin panel group -->
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">		
								<div class="container">
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<div class="well well-sm">
												<form class="form-horizontal" action="" method="post">
													<fieldset>
														<!-- Form Name -->
														<legend>Nous Joindres</legend>
														<!-- Name input-->
														<div class="form-group">
														  <label class="col-md-3 control-label" for="name">Name</label>
														  <div class="col-md-9">
															<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
														  </div>
														</div>
												
														<!-- Email input-->
														<div class="form-group">
														  <label class="col-md-3 control-label" for="email">Ton Email</label>
														  <div class="col-md-9">
															<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
														  </div>
														</div>
												
														<!-- Message body -->
														<div class="form-group">
														  <label class="col-md-3 control-label" for="message">Ton message</label>
														  <div class="col-md-9">
															<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
														  </div>
														</div>
												
														<!-- Form actions -->
														<div class="form-group">
														  <div class="col-md-12 text-right">
															<button type="submit" class="btn btn-primary btn-lg">Submit</button>
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
					</form>
				</div>	
			</div>	
		</div>
	</div>
 </body>
</html> 
