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
    <center><h3>Cr�ation de fiches</h3></center>      
    <p></p>      
  </div>
  
  
<div class="container">
<div class="">
<div class="row ">
<div class="col-sm-offset-1 col-sm-8 jumbotron">
<form class="form-horizontal">
<fieldset>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selectbasic">Classe </label>
  <div class="controls">
    <select id="selectbasic" name="selectbasic" class="input-xxlarge">
	  <option>Seconde</option>
	  <option>Seconde pro</option>
	  <option>------------------------------------</option>
	  <option>G�n�ral :</option>
      <option>S�rie S</option>
      <option>S�rie ES</option>
      <option>S�rie L</option>
      <option>-------------------------------------</option>
      <option>Technologique :</option>
      <option>STMG</option>
      <option>ST2A</option>
      <option>ST2S</option>
	  <option>ST2D</option>
	  <option>STL</option>
	  <option>STAV</option>
	  <option>TMD</option>
	  <option>H�tellerie</option>
      <option>-------------------------------------</option>
      <option>Professionnel</option>
      <option>Gestion Administration</option>
      <option>-------------------------------------</option>
      <option>Autre</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selectbasic">Mati�res </label>
  <div class="controls">
    <select id="selectbasic" name="selectbasic" class="input-xxlarge">
      <option>G�n�ral :</option>
      <option>Maths</option>
      <option>Anglais</option>
      <option>Espagnol</option>
      <option>Philosophie</option>
      <option>Histoire</option>
      <option>-------------------------------------</option>
      <option>Technologique :</option>
      <option>Management</option>
      <option>Economie</option>
      <option>Droit</option>
      <option>-------------------------------------</option>
      <option>Sp�cialit� :</option>
      <option>Syst�me d'information</option>
      <option>Finance</option>
      <option>Ressources Humaines</option>
      <option>Mercatique</option>
      <option>-------------------------------------</option>
      <option>Autre</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="Th�meId">Th�me</label>
  <div class="controls">
    <input id="Th�meId" name="Th�meId" type="text" placeholder="Titre" class="input-xxlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="ChapitreId">Chapitre</label>
  <div class="controls">
    <input id="ChapitreId" name="ChapitreId" type="text" placeholder="Titre" class="input-xxlarge">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="FicheId">Fiche</label>
  <div class="controls">                     
    <textarea id="FicheId" name="FicheId">
...
</textarea>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="">
<div class="row ">
<div class="col-sm-offset-1 col-sm-8 jumbotron">
<div class="row">
<p>Ma Fiche<br/>
<textarea name="contenu" rows="10" cols="50" ><?php
if (!empty($_POST["contenu"])) {
	echo stripcslashes(htmlspecialchars($_POST["contenu"],ENT_QUOTES));
}
?></textarea>

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
    <button id="CreerId" name="CreerId" class="btn btn-inverse">Cr�er </button>
  </div>
  
  
</div>
</fieldset>
</form>

  
</body>
</html>