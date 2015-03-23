<?php
//Page Acceuil
	session_start();	
?>
<html>
  <head>
    <title>Page notes</title>
		  <?php
			include 'includes.html';
		  ?>
	
  </head>
  
  <body>
  <?php
	include 'navbar.php';
  ?>
<div class="control-group">
  <label class="control-label" for="selectbasic">Classe </label>		
	<div class="controls">
		<select id="selectbasic" name="selectbasic" class="input-xxlarge">
		  <option>Seconde</option>
		  <option>Seconde pro</option>
		  <option>------------------------------------</option>
		  <option>Général :</option>
		  <option>Série S</option>
		  <option>Série ES</option>
		  <option>Série L</option>
		  <option>-------------------------------------</option>
		  <option>Technologique :</option>
		  <option>STMG</option>
		  <option>ST2A</option>
		  <option>ST2S</option>
		  <option>ST2D</option>
		  <option>STL</option>
		  <option>STAV</option>
		  <option>TMD</option>
		  <option>Hôtellerie</option>
		  <option>-------------------------------------</option>
		  <option>Professionnel</option>
		  <option>Gestion Administration</option>
		  <option>-------------------------------------</option>
		  <option>Autre</option>
		</select>
	</div>
</div>
	
	