<?php 
    require "./vehicule.php";
    $voiture = new Vehicule("Mercedes CLK", 4, 250);
    // var_dump($voiture);
    // echo '<p></p>";
    $moto = new Vehicule("Honda CBR", 2, 280);
    // var_dump($moto);
    echo '<p>Le vehicule '.$voiture->getNom().' est une '.$voiture->detect().'</p>';
    $type = $moto->detect();
    echo '<p>Le vehicule '.$moto->getNom().' est une '.$moto->detect().'</p>';
    $voiture->boost(50);
    echo '<p>Le vehicule '.$voiture->getNom().' a une vitesse de '.$voiture->getVitesse().' km/h</p>';
    echo $voiture->plusRapide($moto);
?>

