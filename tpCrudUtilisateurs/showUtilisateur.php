<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="addUtilisateur.php">Ajouter Utilisateur</a></li>
                <li><a href="showUtilisateur.php">Afficher Utilisateurs</a></li>
                <li><a href="updateUtilisateur.php">Modifier Utilisateur</a></li>
            </ul>
        </nav>
    </header>
    <h2>Liste des utilisateurs</h2>
    <form action="" method="post">
    <?php
        // inclure le fichier de connexion à la dbb
        include "connexionBDD.php";
        // inclure le fichier des requêtes
        include "fonctions.php";
        showAllUtilisateur($bdd);
    ?>
        <input type="submit" value="Supprimer">
    </form>

    <?php 
        if(isset($_GET['error'])){
            echo "<p>Veuillez selectionner un produit à modifier</p>";
        }
        //vérification de la super globale $_POST['id_prod']
        if(isset($_POST['idUtil'])){
            //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
            foreach($_POST['idUtil'] as $id){
                deleteUtilisateur($bdd, $id);
                echo "<p>Suppression de l'utilisateur $id</p>";
                // Script JS pour redirection vers showProduit.php dans 1500 ms 
                echo '
                <script>
                    setTimeout(()=>{
                        document.location.href="showUtilisateur.php"; 
                    }, 1500);
                </script>';
            }
        }
        else{
            echo "<p>Veuillez cocher un ou plusieurs produit à supprimer</p>";
        }
    ?>
</body>
</html>


