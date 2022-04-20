<?php 
    require "./vehicule.php";
    $voiture = new Vehicule("Mercedes CLK", 4, 250);
    // var_dump($voiture);
    // echo "<p></p>";
    $moto = new Vehicule("Honda CBR", 2, 280);
    // var_dump($moto);
    $type = $voiture->detect();
    echo "<p>Le vehicule $voiture->nom est une $type</p>";
    $type = $moto->detect();
    echo "<p>Le vehicule $moto->nom est une $type</p>";
    $voiture->boost(50);
    echo "<p>Le vehicule $voiture->nom a une vitesse de $voiture->vitesse km/h</p>";
    $vehicule = $voiture->plusRapide($moto);
    echo "<p>Le vehicule le plus rapide est $vehicule->nom</p>";
?>

