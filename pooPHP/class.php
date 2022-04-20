<?php
    /* Exemple de création d'une class */
    class Vehicule{
        /* ------------------------------ Attributs ------------------------------ */
        public $nom;
        public $nbRoues;
        public $vitesse;

        
        /* ------------------------------ Constructeur ------------------------------ */
        public function __construct($name, $nbr, $vit){
            $this->nom = $name;
            $this->nbRoues = $nbr;
            $this->vitesse = $vit;
        }
    

        /* ------------------------------ Methodes ------------------------------ */
        public function demarrage(){
            echo "$this->nom a demarré";
        }
    }
?>

