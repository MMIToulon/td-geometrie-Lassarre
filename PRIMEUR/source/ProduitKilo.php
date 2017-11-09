<?php
/* Je déclare la classe ProduitKilo qui est la classe fille de Produit.*/
require_once('Produit.php');
class ProduitKilo extends Produit{

/* Je définis maintenant les méthodes.*/

	public function __construct(){
		echo "Commençons par décrire le produit ! ";
		parent::__construct();
	}

/* Je définis la fonction __toString qui me permettra d'afficher les différentes caractéristiques du produit qui concerne le prix.*/
 	public function __toString(){
 		$text = " <hr> <br/> Le poids du produit en kilo(s) est de : ".
 				"<br>  ".$this->poidsprod.
 				" <hr> <br/> Le prix du produit au kilo est de :".
 				"<br> ".$this->prixkilo."<hr>";
 		return $text;
 	}

 	/* Je définis la fonction calculPrix qui me permettra d'afficher le prix du produit dont le résultat est contenu dans la variable floor.*/

 	public function calculPrix(){
 		return floor($this->prixkilo*$this->poidsprod);
 	}

}



