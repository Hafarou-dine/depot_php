<?php
    class Vehicule{
        /* ------------------------------ Attributs ------------------------------ */
        private $nom;
        private $nbRoues;
        private $vitesse;

        
        /* ------------------------------ Constructeur ------------------------------ */
        // Toujours en public
        public function __construct($name, $nbr, $vit){
            $this->nom = $name;
            $this->nbRoues = $nbr;
            $this->vitesse = $vit;
        }
    

        /* ------------------------------ Methodes ------------------------------ */
        public function getNom():string{
            return $this->nom;
        }

        public function setNom($new):void{
            $this->nom = $new;
        }

        public function getNbRoues():int{
            return $this->nbRoues;
        }

        public function setNbRoues($new):void{
            $this->nbRoues = $new;
        }

        public function getVitesse():int{
            return $this->vitesse;
        }

        public function setVitesse($new):void{
            $this->vitesse = $new;
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

        public function plusRapide($vehicule):string{
            if($this->vitesse > $vehicule->vitesse){
                return '<p>Le vehicule le plus rapide est '.$this->nom.'</p>';
            }
            else if($this->vitesse == $vehicule->vitesse){
                return '<p>Les deux vehicules ont une vitesse égale</p>';
            }
            else{
                return '<p>Le vehicule le plus rapide est '.$vehicule->nom.'</p>';
            }
        }
    }
?>

