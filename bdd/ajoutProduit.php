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
        <p><input type="submit" value="Ajouter"></p>
    </form>
    
    <?php
        // Pour inclure le fichier de connexion à la bdd 
        include "connexionBDD.php";
        // Pour inclure le fichiers fonctions
        include "fonctions.php";
        if(isset($_POST['nom_produit']) && isset($_POST['contenu_produit']) && ($_POST['nom_produit'] != "") && ($_POST['contenu_produit'] != "")){
            $nom = $_POST['nom_produit'];
            $contenu = $_POST['contenu_produit'];
            insertProduit($bdd, $nom, $contenu);
            echo "<p>$nom à été ajouter en BDD</p>"; 
        }
        else{
            echo "<p>Veuillez remplir les champs du formulaire</p>";
        }
    ?>
</body>
</html>

