<?php
    session_start();
    if(isset($_SESSION['nom'])){
        echo '<p>Bonjour '.$_SESSION['nom'].'</p>';
    };
    $_SESSION['destination1'] = true;
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destination1</title>
</head>
<body>
    <a href="./start.php">start</a>
    <a href="./destination2.php">destination2</a>
    <a href="./deconnexion.php">deconnexion</a>
</body>
</html>

