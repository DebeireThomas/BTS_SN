<?php
//Cette fonction permet de retourner les boutons du menu haut
function menuhaut() {
		$menu = '	<a href="index.php" class="bouton1"> Accueil </a>
					<a href="index.php?a=texte" class="bouton1"> Voir Fable </a>
					<a href="index.php?a=photo" class="bouton1"> Voir Photo </a>
					<a href="index.php?a=Test" class= "bouton1"> Nightzer </a>' ;	
	return ($menu);	
}

//Cette fonction permet de retourner les boutons du menu gauche
function menugauche() {
	$menu='	<a href="http://bourdelle.entmip.fr" class="bouton2"> ENT </a>
			<a href="http://www.digikey.fr" class="bouton2"> digikey </a>	';
	
	return ($menu);


}