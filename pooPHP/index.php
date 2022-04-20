<?php
    // import du fichier class.php (require est identique à un include)
    require './class.php';

    $voiture = new Vehicule("Renault Clio", 4, 160);
    var_dump($voiture);
    echo '<br>';
    // $voiture->nom = "Renault Clio";
    // $voiture->nbRoues = 4;
    // $voiture->vitesse = 160;
    // var_dump($voiture);
    // echo '<br>';
    echo $voiture->nom;
    echo '<br>';
    $voiture->demarrage();
?>

