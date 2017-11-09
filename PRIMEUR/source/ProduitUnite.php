<?php
/* Je déclare la classe ProduitUnite qui est la classe fille de Produit.*/
require_once('Produit.php');
class ProduitUnite extends Produit{

/* Je définis maintenant les méthodes.*/

	public function __construct(){
		echo "Commençons par décrire le produit ! ";
		parent::__construct();
	}

/* Je définis la fonction __toString qui me permettra d'afficher les différentes caractéristiques du produit qui concerne le prix.*/
 	public function __toString(){
 		$text = "<hr> Le poids du produit est de : ".
 				"<br> Le/Les produit(s) sont au nombre de : ".$this->nombreprod.
 				"<br> Le prix du produit à l'unité est de :".$this->prixunite."<hr>";
 		return $text;
 	}


 	/* Je définis la fonction calculPrix qui me permettra d'afficher le prix du produit dont le résultat est contenu dans la variable floor.*/

 	public function calculPrix(){
 		return floor($this->nombreprod*$this->prixunite);
 	}	
}



