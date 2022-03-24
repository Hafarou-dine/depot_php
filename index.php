<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // commentaire sur une ligne
        /* commentaire sur plusieurs lignes */
        // phpinfo();


        /* -------------------- L'affichage -------------------- */
        echo "Hello World ";
        // le <br> pour sauter de ligne
        echo "<br>";


        /* -------------------- Les variables -------------------- */
        $variable = 10;
        echo $variable;
        echo "<br>";


        /* -------------------- La concatenation -------------------- */
        $prenom = 'Hafarou-dine';
        // Avec les guillemets simple 
        echo 'Mon prenom : '.$prenom.'<br>';
        // Avec les guillemets double
        echo "Mon prenom : $prenom<br>";
        echo "Mon prenom : {$prenom}<br>";



        
    ?>
</body>
</html>


