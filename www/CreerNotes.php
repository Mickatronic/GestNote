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
  
	<div class="container">
	  <div class="jumbotron">
		<center><h3>Ajout des notes</h3></center>      
		<p></p>      
	  </div> 
	</div>
	<div class="container">
	  <div class="jumbotron">
		<div class="control-group">
		  <label class="control-label" for="selectbasic">Classe :</label>		
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
				  <option>Professionnel:</option>
				  <option>Gestion Administration</option>
				  <option>-------------------------------------</option>
				  <option>Autre</option>
				</select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="selectbasic">Mati�res :</label>
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
		<div class="control-group">
			<label class="control-label" for="selectbasic">Eleve:</label>
			  <div class="controls">
				<select id="selectbasic" name="selectbasic" class="input-xxlarge">	
				 <option>-------------------------------------</option>
				</select>
			  </div>
		</div>
		<div class="control-group">
          <label class="control-label" for="NoteId">Note</label>
            <div class="controls">
             <input id="NoteId" name="NoteId" type="text" placeholder="ex: 10,5" class="input-xxlarge">    
            </div>
        </div>
	  </div>		
	</div>