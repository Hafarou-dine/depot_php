<?php
    /* ---------------------------------------- Imports ---------------------------------------- */
    // importer la connexion à la bdd
    include "./utils/connexionBDD.php";
    // importer le model
    include "./model/model_users.php";
    // importer les fonctions utilitaires
    include "./utils/fonctions.php";
    // importer la vue(interface)
    include "./view/view_update_user.php";


    /* ---------------------------------------- Logique ---------------------------------------- */
    if(isset($_GET['id']) && $_GET['id'] != ""){
        $id = $_GET['id'];
        $data = showUser($bdd, $id);
        $nom = $data['nom_util'];
        $prenom = $data['prenom_util'];
        $mail = $data['mail_util'];
        $mdp = $data['mdp_util'];
        echo '
        <script>
            remplirChamps("'.$nom.'", "'.$prenom.'", "'.$mail.'", "'.$mdp.'");
        </script>';
        if(isset($_POST['nom_util']) && ($_POST['nom_util'] != "") && 
        isset($_POST['prenom_util']) && ($_POST['prenom_util'] != "") && 
        isset($_POST['mail_util']) && ($_POST['mail_util'] != "") && 
        isset($_POST['mdp_util']) && ($_POST['mdp_util'] != "")){
            $nom = $_POST['nom_util'];
            $prenom = $_POST['prenom_util'];
            $mail  = $_POST['mail_util'];
            $mdp = $_POST['mdp_util'];
            $oldMail = $data['mail_util'];
            // verifier si le mail n'existe pas en BDD
            if(!(mailExiste($bdd, $mail))){
                // faire la mise à jour
                updateUser($bdd, $id, $nom, $prenom, $mail, $mdp);
                echo "<p>L'utilisateur $id a été modifié</p>";
                // redirection vers la page './update_user.php?id='.$id.' dans 3000 ms
                redirection('./update_user.php?id='.$id.'', "3000");
            }
            // sinon le mail esixte en BDD
            else{
                // verifier si le nouveau mail est identique à l'ancien mail
                if($mail == $oldMail){
                    // faire la mise à jour en gardant l'ancien mail
                    updateUser($bdd, $id, $nom, $prenom, $oldMail, $mdp);
                    echo "<p>L'utilisateur $id a été modifié</p>";
                    echo "<p>Pas de changement de mail</p>";
                    redirection('./update_user.php?id='.$id.'', "3000");
                }
                else{
                    // faire la mise à jour en gardant l'ancien mail
                    updateUser($bdd, $id, $nom, $prenom, $oldMail, $mdp);
                    echo "<p>L'utilisateur $id a été modifié</p>";
                    echo "<p>Impossible de changer le mail, le mail saisie est déjà utiliser par un autre utilisateur</p>";
                    // redirection vers la page './update_user.php?id='.$id.' dans 3000 ms
                    redirection('./update_user.php?id='.$id.'', "3000");
                }
            }
        }
        else{
            echo "<p>Veuillez saisir vos modifications</p>";
        }
    }
    else{
        header('Location:./show_all_users.php?error');
    }
?>

