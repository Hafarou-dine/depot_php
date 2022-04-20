<?php
    // import du fichier maison.php
    require 'maison.php';
    $maMaison = new Maison("Ma maison", 20, 20, 0);
    $maMaison->surface();
    $hotel = new Maison("Hotel", 20, 20, 5);
    $hotel->surface();
?>

