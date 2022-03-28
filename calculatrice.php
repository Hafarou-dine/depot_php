<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Calculatrice</h3>
    <form action="" method="post">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr1">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr2">
        <p>Saisir un Opérateur (+,-,*,/) :</p>
        <input type="text" name="operateur">
        <p><input type="submit" value="Calculer"></p>
    </form>
    
    <?php
        if(isset($_POST["nbr1"]) && ($_POST["nbr1"] != "") && isset($_POST["nbr2"]) && ($_POST["nbr2"] != "") && isset($_POST["operateur"]) && ($_POST["operateur"] != "")){
            if(is_numeric($_POST["nbr1"]) && is_numeric($_POST["nbr2"])){
                $nbr1 = $_POST["nbr1"];
                $nbr2 = $_POST["nbr2"];
                $operator = $_POST["operateur"];
                switch($operator){
                    case "+":
                        $res = round($nbr1 + $nbr2, 2);
                        $msg = "<p>$nbr1 $operator $nbr2 = $res</p>";
                        break;
                    case "-":
                        $res = round($nbr1 - $nbr2, 2);
                        $msg = "<p>$nbr1 $operator $nbr2 = $res</p>";
                        break;
                    case "*":
                        $res = round($nbr1 * $nbr2, 2);
                        $msg = "<p>$nbr1 $operator $nbr2 = $res</p>";
                        break;
                    case "/":
                        $res = round($nbr1 / $nbr2, 2);
                        $msg = "<p>$nbr1 $operator $nbr2 = $res</p>";
                        break;
                    default:
                        $msg = "<p>Mauvais operateur</p>";
                        break;
                }
                echo $msg;
            }
            else{
                echo "<p>Veuillez saisir des nombres</p>";
            } 
        }
        else{
            echo "<p>Veuillez remplir les champs du formulaire</p>";
        }
    ?>
</body>
</html>

