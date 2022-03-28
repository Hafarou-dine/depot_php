<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Produit</title>
</head>
<body>
    <h3>Ajouter un produit</h3>
    <form action="" method="post">
        <p>Saisir le nom du produit :</p>
        <input type="text" name="nom_produit">
        <p>Saisir le contenu du produit :</p>
        <textarea type="text" name="contenu_produit" cols="40" rows="5"></textarea>
        <p><input type="submit" value="Save"></p>
    </form>
    <?php
        include "connexionBDD.php";
        include "fonctions.php";
    ?>
</body>
</html>

