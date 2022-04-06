<?php 
    /* ---------------------------------------- Imports ---------------------------------------- */
    // importer la connexion à la bdd
    include "./utils/connexionBDD.php";
    // importer le model
    include "./model/model_users.php";
    // importer les fonctions utilitaires
    include "./utils/fonctions.php";
    // importer la vue(interface)
    include "./view/view_show_all_users.php";


    /* ---------------------------------------- Logique ---------------------------------------- */
    $liste = showUsers($bdd);
    if(count($liste) == 0){
        echo "<p>Il n'y a aucun utilisateur en BDD<p>";
    }
    else{
        foreach($liste as $data){
            $id = $data['id_util'];
            $nom = $data['nom_util'];
            $prenom = $data['prenom_util'];
            echo '<p><input type="checkbox" name="idUtil[]" value="'.$id.'"><a href="update_user.php?id='.$id.'">'.$nom.' '.$prenom.'</a></p>';
        }
        echo '<input type="submit" value="Supprimer">
        </form>';
        if(isset($_GET['error'])){
            echo "<p>Veuillez selectionner un utilisateur à modifier</p>";
        }
        if(isset($_POST['idUtil'])){
            foreach($_POST['idUtil'] as $id){
                $userData = showUser($bdd, $id);
                $nom = $userData['nom_util'];
                $prenom = $userData['prenom_util'];
                deleteUser($bdd, $id);
                echo "<p>Suppression de l'utilisateur $nom $prenom</p>";
                // redirection vers la page "./show_all_users.php" dans 3000 ms 
                redirection("./show_all_users.php", "3000");
            }
        }
        else{
            echo "<p>Veuillez cocher un ou plusieurs utilisateurs à supprimer</p>";
        }
    }
?>

