<?php
    class Vehicule{
        /* ------------------------------ Attributs ------------------------------ */
        private $nom;
        private $nbRoues;
        private $vitesse;

        
        /* ------------------------------ Constructeur ------------------------------ */
        // Toujours en public sinon on ne pourra pas instancier de nouvel objet
        public function __construct($name, $nbr, $vit){
            $this->nom = $name;
            $this->nbRoues = $nbr;
            $this->vitesse = $vit;
        }
    

        /* ------------------------------ Methodes ------------------------------ */
        /* -------------------- getters & setter -------------------- */
        public function getNom():string{
            return $this->nom;
        }

        public function setNom(string $new):void{
            $this->nom = $new;
        }

        public function getNbRoues():int{
            return $this->nbRoues;
        }

        public function setNbRoues(int $new):void{
            $this->nbRoues = $new;
        }

        public function getVitesse():int{
            return $this->vitesse;
        }

        public function setVitesse(int $new):void{
            $this->vitesse = $new;
        }

        
         /* -------------------- Autres methodes -------------------- */
        public function detect():string{
            if($this->getNbRoues() == 4){
                $res = "voiture";
            }
            else if($this->getNbRoues() == 2){ 
                $res = "moto";
            }
            else{
                $res = "autre";
            }
            return $res;
        }

        public function boost(int $boost):void{
            $this->setVitesse($this->getVitesse() + $boost);
        }

        public function plusRapide($vehicule):string{
            if($this->getVitesse() > $vehicule->getVitesse()){
                return '<p>Le vehicule le plus rapide est '.$this->getNom().'</p>';
            }
            else if($this->getVitesse() == $vehicule->getVitesse()){
                return '<p>Les deux vehicules ont une vitesse égale</p>';
            }
            else{
                return '<p>Le vehicule le plus rapide est '.$vehicule->nom.'</p>';
            }
        }

    }
?>

