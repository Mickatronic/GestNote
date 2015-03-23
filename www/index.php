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
    <center><p>Le site qui te permettra de créer au mieux ton année scolaire !</p></center>      
  </div>
  
  <div class="row">
    <div class="col-md-3">
     <center> <p>Pour chaque matières : créer tes propres fiches de révision tout au long de l'année. Modifie tes fiches, supprime-les ou personnalise-les à  ta façon. </p> </center>
    </div>
    <div class="col-md-3"> 
     <center> <p>...</p> </center>
    </div>
    <div class="col-md-3"> 
      <center> <p>Notes</p> </center>
    </div>

  </body>
</html>