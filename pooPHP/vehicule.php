<?php
    class Vehicule{
        /* ------------------------------ Attributs ------------------------------ */
        private $nom;
        private $nbRoues;
        private $vitesse;

        
        /* ------------------------------ Constructeur ------------------------------ */
        public function __construct($name, $nbr, $vit){
            $this->nom = $name;
            $this->nbRoues = $nbr;
            $this->vitesse = $vit;
        }
    

        /* ------------------------------ Methodes ------------------------------ */
        public function getNom(){

        }

        public function setNom(){

        }

        public function getNbRoues(){

        }

        public function setNbRoues(){

        }

        public function getVitesse(){

        }

        public function setVitesse(){

        }

        public function detect():string{
            if($this->nbRoues == 4){
                $res = "voiture";
            }
            else if($this->nbRoues == 2){ 
                $res = "moto";
            }
            else{
                $res = "autre";
            }
            return $res;
        }

        public function boost($boost):void{
            $this->vitesse += $boost;
        }

        public function plusRapide($vehicule):object{
            if($this->vitesse >= $vehicule->vitesse){
                return $this;
            }
            else{
                return $vehicule;
            }
        }
    }
?>

