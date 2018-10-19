<?php

//Initialisation de la page html
$htm="";

// Appel des fonctions de menus
include 'modele/menu.php';


// Appel du template de sortie
$sortie=file("vue/sommaire.html");


// R�cup�ration de l'action � effectuer
if (isset($_GET['a'])) $action=$_GET['a']; else $action="";

switch ($action) {
	// Si aucune action n'est envoy�e dans l'URL on affiche l'accueil
	case "":
		$contenu='<h1>Application WEB dynamique <br> Exemple N�1</h1>';
		break;
		
	// Si l'action demand�e est afficher texte, on appelle le fichier texte.php
	case "texte":
		require_once('modele/texte.php');
	break;
	
	// Si l'action demand�e est afficher photo, on appelle le fichier photo.php
	case "photo":
		require_once('modele/photo.php');
	break;

	// Si l'action demand�e est afficher Test, on appelle le fichier Test.php
	case "Test":
		require_once('modele/Test.php');
	break;
}


//Transformation de la page sommaire, les balises sont remplac�es
foreach ($sortie as $valeur) {
	$valeur=preg_replace('/{#CONTENU}/',$contenu,$valeur);
	$valeur=preg_replace('/{#MENUH}/',menuhaut(),$valeur);
	$valeur=preg_replace('/{#MENUG}/',menugauche(),$valeur);
	$htm.=$valeur;
}

//Affichage final de la page sommaire modifi�e
print $htm;

?>

