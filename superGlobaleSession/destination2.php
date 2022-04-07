<?php
    //méthode obligatoire pour utiliser session
    session_start();
    
    if(isset($_SESSION['nom'])){
        echo '<p>Bonjour '.$_SESSION['nom'].'</p>';
    };
    $_SESSION['destination2'] = true;
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destination2</title>
</head>
<body>
    <a href="./start.php">start</a>
    <a href="./destination1.php">destination1</a>
    <a href="./deconnexion.php">deconnexion</a>
</body>
</html>

