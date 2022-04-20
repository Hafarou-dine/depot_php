<?php 
    class Maison{
        /* ------------------------------ Attributs ------------------------------ */
        public $nom;
        public $longueur;
        public $largeur;
        public $nbrEtage;


        /* ------------------------------ Constructeur ------------------------------ */
        public function __construct($name, $long, $larg, $etage){
            $this->nom = $name;
            $this->longueur = $long;
            $this->largeur = $larg;
            $this->nbrEtage = $etage;
        }
    

        /* ------------------------------ Methodes ------------------------------ */
        public function surface():void{
            if($this->nbrEtage == null || $this->nbrEtage <= 0){
                $res =  $this->longueur * $this->largeur;
            }
            else{
                $res =  $this->longueur * $this->largeur * ($this->nbrEtage + 1);
            }
            echo "<p>La surface de $this->nom est égale à : $res m²</p>";
        }
    }
?>

