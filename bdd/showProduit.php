<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Produit</title>
</head>
<body>
    <h3>Liste des produits</h3>
    <form action="" method="post">
    <?php 
        // Pour inclure le fichier de connexion à la bdd 
        include "connexionBDD.php";
        // Pour inclure le fichiers fonctions
        include "fonctions.php";
        showAllPoduit($bdd);
    ?>
        <input type="submit" value="Supprimer">
    </form>
    <?php
        if(isset($_GET['error'])){
            echo "<p>Veuillez selectionner un produit à modifier</p>";
        }
        //vérification de la super globale $_POST['id_prod']
        if(isset($_POST['id_prod'])){
            //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
            foreach($_POST['id_prod'] as $id){
                deleteProduit($bdd, $id);
                echo "<p>Suppression de l'article $id</p>";
                // Script JS pour redirection vers showProduit.php dans 1500 ms 
                echo '<script>
                    setTimeout(()=>{
                    document.location.href="showProduit.php"; 
                    }, 1500);</script>';
                // version PHP
                // header('Location : showProduit.php');
            }
        }
        else{
            echo "<p>Veuillez cocher un ou plusieurs produit à supprimer</p>";
        }
    ?>
</body>
</html>

