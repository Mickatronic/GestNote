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
	<h4>Révise tes fiches</h4>      
	<p>...</p>      
	</div>			 
	<div class="container">
		<div class="">
			<div class="row ">
				<div class="col-xm-offset-1 col-Xm-10 jumbotron">
						<div> 
							<fieldset> 
								<!-- Form Name -->
								<legend>Lecture</legend>
								
								<div class="container">
												<div class="row ">
													<div class="col-xm-offset-1 col-sm-8 jumbotron">
														<p>Ma Fiche<br/>
														<textarea name="Fiche" rows="10" cols="50" >
														<?php
														if(isset($_GET["IdFiche"]))
														{
															$IdFiche = $_GET["IdFiche"];
														} 
														else
														{
															$IdFiche = 0;
														}
														
														$db = mysqli_connect('localhost', 'root', '');

														// on sélectionne la base
														mysqli_select_db($db,'gestionnotes');

														// on crée la requête SQL
														$sql = "SELECT f.Theme,f.Chapitre, f.Fiche FROM fiches f WHERE idFiche =".$IdFiche.";";

														// on envoie la requête
														$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

														while($data = mysqli_fetch_assoc($req))
														{
										
															echo $data["Theme"];
														
															echo $data["Chapitre"];
															
															echo $data ["Fiche"];
														
														} 
															?>
															</textarea>
														
														<!-- File Button --> 														
														<div class="control-group">
														  <div class="controls">
															<br><input id="AjouterId" name="Ajouter" class="btn btn-inverse" type="file"></br>
														  </div>
														</div>
														<!-- Button -->
														<div class="control-group">
														  <label class="control-label" for="CreerId"></label>
														  <div class="controls">
															<input type="submit" value="Modifier" class="btn btn-info"/>
															<a href="Index.php"  name="button2id" class="btn btn-danger">Supprimer</a>
														  </div>
														</div>
													</div>
												</div>
											</div>	