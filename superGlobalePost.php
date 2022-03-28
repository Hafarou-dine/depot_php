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
        /* Exercice 2 :
        -Créer une page de formulaire dans laquelle on aura 3 champs de formulaire de type nombre :
        1 champ de formulaire qui demande un prix HT d’un article,
        1 champ de formulaire qui demande le nombre d’article,
        1 champ de formulaire qui demande le taux de TVA,
        -Afficher dans cette même page le prix TTC (prix HT*taux TVA*quantité) avec un affichage du style :
        Le prix TTC est égal à : valeur € */
    ?>

    <strong>Les super globales : methode post</strong><br>
    <strong>Exercice 2</strong><br>
    <form action="" method="post">
        <p>Prix HT :</p> 
        <input type="text" name="prix"><br>
        <p>Quantite :</p>
        <input type="text" name="quantite"><br>
        <p>Taux TVA :</p>
        <input type="text" name="tva"><br><br>
        <button type="submit">Envoyer</button><br><br>
    </form>
    
    <?php 
        if(isset($_POST["prix"]) && isset($_POST["quantite"]) && isset($_POST["tva"]) && ($_POST["prix"] != "") && ($_POST["quantite"] != "") && ($_POST["tva"] != "")){
            $prixHt = floatval($_POST["prix"]);
            $nbr = intval($_POST["quantite"]);
            $tva = floatval($_POST["tva"]);
            $res = $prixHt * $nbr * (1+($tva/100));
            $res = round($res, 2);
            echo "Le prix TTC est égale  à : $res €";
        }
        else{
            echo "Veuillez remplir les champs du formulaire";
        }
        // echo "<br>";
        // var_dump($_POST);
    ?>
</body>
</html>

