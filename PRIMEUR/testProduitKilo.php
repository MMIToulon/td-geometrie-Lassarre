<?php
/* Ce code est un fichier de tests unitaires. Il permet de tester les méthode que nous avons crées dans la classe.*/

/* Cette ligne affiche les erreurs éventuelles.*/
	ini_set('display_errors','1');

/* Ce code a besoin du code Php ProduitKilo pour fonctionner*/	
	require_once("source/ProduitKilo.php");


/*On instensie*/
	$c = new ProduitKilo();
	echo $c;


/*et on calcule le prix du produit*/
	$prix = $c->calculPrix();	
	echo "<br> Le prix du produit en euros est donc de : ".$prix;

	echo "<br> Le nombre de produit créé est de : ".Produit::$compteur;

?>