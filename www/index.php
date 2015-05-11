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
				<legend>Bienvenue sur Ship-Management</legend>
				  
				<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<!-- begin panel group -->
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								
								<!-- panel 1 -->
								<div class="panel panel-default">
									<!--wrap panel heading in span to trigger image change as well as collapse -->
									<span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
										<div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<h3 <b class="panel-title">A quoi ça sert ? </b></h3>
										</div>
									</span>
									
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
										<!-- Tab content goes here -->
										Créer des fiches de révision peut est une tâche ponctuelle qui prend énormément de temps et chaque élèves ne sait pas comment faire une fiche de révision. Ainsi ce site vous permettra en tant qu'élève de créer vos fiches tout au long de l'année à l'aide de conseil pratiques. Les points essentiel seront mis en rappelle et vos fiches pourront être consulter par vos professeurs. Nous irons plus loins et vous proposerons des applications ciblés qui vous permettrons d'être plus efficace au quotidient.  
										</div>
									</div>
								</div> 
								<!-- / panel 1 -->
								
								<!-- panel 2 -->
								<div class="panel panel-default">
									<!--wrap panel heading in span to trigger image change as well as collapse -->
									<span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
										<div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<h4 class="panel-title collapsed">Réalise tes fiches de révision</h4>
										</div>
									</span>

									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
										<!-- Tab content goes here -->
										tab 2 content
										</div>
									</div>
								</div>
								<!-- / panel 2 -->
								
								<!--  panel 3 -->
								<div class="panel panel-default">
									<!--wrap panel heading in span to trigger image change as well as collapse -->
									<span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
										<div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<h4 class="panel-title">Applications pratique</h4>
										</div>
									</span>

										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										  <div class="panel-body">
										  <!-- tab content goes here -->
										   tab 3 content
										  </div>
										</div>
								</div>
								<!--  panel 4 -->
								<div class="panel panel-default">
									<!--wrap panel heading in span to trigger image change as well as collapse -->
									<span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
										<div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<h4 class="panel-title">Fait toi aider par tes profs</h4>
										</div>
									</span>

										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										  <div class="panel-body">
										  <!-- tab content goes here -->
										   tab 3 content
										  </div>
										</div>
								</div>
							</div> <!-- / panel-group -->
							 
						</div> <!-- /col-md-4 -->
						
						<div class="col-md-8">
							<!-- begin macbook pro mockup -->
							<div class="md-macbook-pro md-glare">
								<div class="md-lid">
									<div class="md-camera"></div>
									<div class="md-screen">
									<!-- content goes here -->                
										<div class="tab-featured-image">
											<div class="tab-content">
												<div class="tab-pane  in active" id="tab1">
														<img src="https://ununsplash.imgix.net/photo-1417024321782-1375735f8987?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950" alt="tab1" class="img img-responsive">
												</div>
												<div class="tab-pane " id="tab2">
													
														<img src="https://unsplash.imgix.net/uploads/1411724908903377d4696/2e9b0cb2?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950">
													
												</div>
												<div class="tab-pane fade" id="tab3">
													
														<img src="https://ununsplash.imgix.net/photo-1422479516648-9b1f0b6e8da8?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950" alt="tab1" class="img img-responsive">
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<!-- Social Footer, Colour Matching Icons -->
								<!-- Include Font Awesome Stylesheet in Header -->
								<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
								<!-- // -->
								<div class="container">
									<h5></h5>
									<hr>
										<div class="text-center center-block">
											<p class="txt-railway"></p>
											<!-- Form Name -->
											<legend>Nous Joindres</legend>
												<a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
												<a href="https://twitter.com/bootsnipp"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
												<a href="https://plus.google.com/+Bootsnipp-page"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
												<a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
										</div>
									<hr>
								</div>
								<br />
								<div class="md-base"></div>
							</div> <!-- end macbook pro mockup -->
						</div> <!-- / .col-md-8 -->
					</div> <!--/ .row -->
				</div> <!-- end sidetab container -->
			</div>
		</div>
	</body>
</html>

