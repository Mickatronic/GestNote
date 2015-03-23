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
		...
	  </div>
	  
	  <div class="container">
  <div class="jumbotron">
    <center><h3>Visualiser mes fiches</h3></center>      
    <p></p>      
  </div>
 
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<center><legend>Mes Matières </legend></center>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="GénéralId">Général</label>
  <div class="col-md-4">
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
  <label class="col-md-4 control-label" for="TechnologiqueId">Techno</label>
  <div class="col-md-4">
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
  <label class="col-md-4 control-label" for="SpecialiteId">Spécialité</label>
  <div class="col-md-4">
    <select id="SpecialiteId" name="SpecialiteId" class="form-control">
      <option value="1">Autre</option>
      <option value="2">Système d'Information</option>
      <option value="">Finance</option>
      <option value="">Ressource Humaine</option>
      <option value="">Mercatique</option>
    </select>
  </div>
</div>

</fieldset>
</form>

  
  
  </body>
</html>