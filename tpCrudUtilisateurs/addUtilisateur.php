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
        <ul>
            <li><a href="addUtilisateur.php">Ajouter Utilisateur</a></li>
            <li><a href="showUtilisateur.php">Afficher Utilisateurs</a></li>
            <li><a href="updateUtilisateur.php">Modifier Utilisateur</a></li>
        </ul>
    </header>
    <h2>Ajouter un utilisateur</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Saisir le nom de l'utilisateur :</p>
        <input type="text" name="nom_util">
        <p>Saisir le prenom de l'utilisateur :</p>
        <input type="text" name="prenom_util">
        <p>Saisir le mail de l'utilisateur :</p>
        <input type="text" name="mail_util">
        <p>Saisir le mot de passe de l'utilisateur :</p>
        <input type="password" name="mdp_util">
        <p>Image de profil : <input type="file" name="img_util"></p>
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
        isset($_POST['mdp_util']) && ($_POST['mdp_util'] != "") && 
        isset($_FILES['img_util'])){
            $nom = $_POST['nom_util'];
            $prenom = $_POST['prenom_util'];
            $mail  = $_POST['mail_util'];
            $mdp = $_POST['mdp_util'];
            $nomTemp = $_FILES['img_util']['tmp_name'];
            $nameFile = $_FILES['img_util']['name'];
            // verifier si un fichier a été selectionner 
            if($nameFile != ""){
                $ulrImg = "./images/$nameFile";
                move_uploaded_file($nomTemp, $ulrImg);
            }
            else{
                $ulrImg = "./images/profil_defaut.jpg";
            }
            if(mailTrouver($bdd, $mail)){
                echo "<p>Ajout impossible ce mail est déjà utilisé par un autre utilisateur</p>";
                // script js de redirction vers addUtilisateur.php dans 3000ms
                echo '
                <script>
                    setTimeout(()=>{
                        document.location.href="addUtilisateur.php"; 
                    }, 3000);
                </script>';
            }
            else{
                insertUtilisateur($bdd, $nom, $prenom, $mail, $mdp, $ulrImg);
                echo "<p>L'utilisateur $nom $prenom a été ajouté en BDD</p>";
                // script js de redirction vers addUtilisateur.php dans 3000 ms
                echo '
                <script>
                    setTimeout(()=>{
                        document.location.href="addUtilisateur.php"; 
                    }, 3000);
                </script>';
            }
        }
        else{
            echo "<p>Veuilez remplir tous les champs du formulaire</p>";
        }
    ?>
</body>
</html>

