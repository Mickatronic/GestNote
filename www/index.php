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
    <center><h1>Bienvenue sur Panda-Ko</h1></center>      
    <center><p>Le site qui te permettra de cr�er au mieux ton ann�e scolaire !</p></center>      
  </div>
  
  <div class="row">
    <div class="col-md-3">
     <center> <p>Pour chaque mati�res : cr�er tes propres fiches de r�vision tout au long de l'ann�e. Modifie tes fiches, supprime-les ou personnalise-les � ta fa�on. </p> </center>
    </div>
    <div class="col-md-3"> 
     <center> <p>...</p> </center>
    </div>
    <div class="col-md-3"> 
      <center> <p>Notes</p> </center>
    </div>

  </body>
</html>