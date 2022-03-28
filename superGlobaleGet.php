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
        /* Exercice 1 :
        -Créer une page de formulaire dans laquelle on aura 2 champs de formulaire de type nombre.
        -Afficher dans cette même page la somme des 2 champs avec un affichage du style :
        La somme est égale à : valeur. */
    ?>

    <strong>Les super globales : methode get</strong><br>
    <strong>Exercice 1</strong><br>
    <form action="" method="get">
        <p>Nombre 1 :</p> 
        <input type="text" name="nbr1"><br>
        <p>Nombre 2 :</p>
        <input type="text" name="nbr2"><br><br>
        <button type="submit">Envoyer</button><br><br>

    </form>

    <?php
        if(isset($_GET["nbr1"]) && isset($_GET["nbr2"]) && ($_GET["nbr1"] != "") && ($_GET["nbr2"] != "")){
            $val1 = floatval($_GET["nbr1"]);
            $val2 = floatval($_GET["nbr2"]);
            $res = $val1 + $val2;
            echo "$val1 + $val2 = $res";
        }
        else{
            echo "Veuillez remplir les champs du formulaire";
        }
        // echo "<br>";
        // var_dump($_GET);
    ?>
</body>
</html>

