<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Utilisateur</title>
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
    <h2>Ajouter un utilisateur</h2>
    <form action="" method="post">
        <p>Saisir le nom de l'utilisateur :</p>
        <input type="text" name="nom_util">
        <p>Saisir le prenom de l'utilisateur :</p>
        <input type="text" name="prenom_util">
        <p>Saisir le mail de l'utilisateur :</p>
        <input type="text" name="mail_util">
        <p>Saisir le mot de passe de l'utilisateur :</p>
        <input type="text" name="mdp_util">
        <p><input type="submit" value="Ajouter"></p>
    </form>

    <?php
        // inclure le fichier de connexion à la dbb
        include "connexionBDD.php";
        // inclure le fichier des requêtes
        include "fonctions.php"; 
        // Verifier si les chapms sont rempli
        if(isset($_POST['nom_util']) && ($_POST['nom_util'] != "") && 
        isset($_POST['prenom_util']) && ($_POST['prenom_util'] != "") && 
        isset($_POST['mail_util']) && ($_POST['mail_util'] != "") && 
        isset($_POST['mdp_util']) && ($_POST['mdp_util'] != "")){
            $nom = $_POST['nom_util'];
            $prenom = $_POST['prenom_util'];
            $mail  = $_POST['mail_util'];
            $mdp = $_POST['mdp_util'];
            if(mailTrouver($bdd, $mail)){
                echo "<p>Ajout impossible ce mail a déjà été enregistrer pour un utilisateur</p>";
            }
            else{
                insertUtilisateur($bdd, $nom, $prenom, $mail, $mdp);
                echo "<p>L'utilisateur $nom $prenom a été ajouter en BDD</p>";
            }
        }
        else{
            echo "<p>Veuilez remplir les champs du formulaire</p>";
        }
    ?>
</body>
</html>

