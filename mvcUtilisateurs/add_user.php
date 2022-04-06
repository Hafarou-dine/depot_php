<?php 
    /* ---------------------------------------- Imports ---------------------------------------- */
    // importer la connexion à la bdd
    include "./utils/connexionBDD.php";
    // importer le model
    include "./model/model_users.php";
    // importer les fonctions utilitaires
    include "./utils/fonctions.php";
    // importer la vue(interface)
    include "./view/view_add_user.php";


    /* ---------------------------------------- Logique ---------------------------------------- */
    // tester si les champs du formulaire sont remplis
    if(isset($_POST['nom_util']) && $_POST['nom_util'] != "" && 
    isset($_POST['prenom_util']) && $_POST['prenom_util'] != "" && 
    isset($_POST['mail_util']) && $_POST['mail_util'] != "" && 
    isset($_POST['mdp_util']) && $_POST['mdp_util'] != ""){
        $nom = $_POST['nom_util'];
        $prenom = $_POST['prenom_util'];
        $mail = $_POST['mail_util'];
        $mdp = $_POST['mdp_util'];
        if(!(mailExiste($bdd, $mail))){
            // ajout de l'utilisateur
            addUser($bdd, $nom, $prenom, $mail, $mdp);
            // message de confirmation
            echo "<p>L'utilisateur $nom $prenom a été ajouter en BDD</p>";
            // redirection vers la page "./add_user.php" dans 3000 ms 
            redirection("./add_user.php", "3000");
        }
        else{
            echo "<p>Création impossible cet email est déjà utilisé par un autre utilisateur</p>";
            // redirection vers la page "./ctrl_add_user.php" dans 3000 ms 
            redirection("./add_user.php", "3000");
        }
    }
    else{
        echo "<p>Veuillez remplir tous les chapms du formulaire</p>";
    }
?>

