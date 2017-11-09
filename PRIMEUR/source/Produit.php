<?php 

/*Je crée les différentes variables nécessaires au calcul du prix du produit. Le prix d'un produit varie en fonction du type/nom du produit, de son poids mais également du prix à l'unité ou du prix au kilo du produit. De plus la quantité de produit fera varier le prix final. */
abstract class Produit 
{
   protected $nomprod = 0;

   protected $poidsprod = 0;

   protected $prixkilo = 0;

   protected $nombreprod = 0;

   protected $prixunite = 0;

   public static $compteur = 0 ;

	public function __construct() {
      echo "Achat d'un produit ? ";

      self::$compteur++;
	}

   public abstract function calculPrix();   
}

?>

