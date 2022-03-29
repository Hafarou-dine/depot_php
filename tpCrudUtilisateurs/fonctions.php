<?php
    // requête d'ajout d'un utilisateur
    function insertUtilisateur($bdd, $nom, $prenom, $mail, $mdp){
        try{
            // je ne mais rien pour le champ de l'image il a la valeur null par defaut 
            $req = $bdd->prepare('INSERT INTO utilisateur(nom_util, prenom_util, mail_util, mdp_util) 
            VALUES(:nom_util, :prenom_util, :mail_util, :mdp_util)');
            $req->execute(array(
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp
            ));
        }
        catch(Exception $e){
            // affichage d'une exception en cas d'ereur
            die('Erreur '.$e->getMessage());
        }
    }


    // requête d'affichage des utilisateur
    function showAllUtilisateur($bdd){
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateur');
            $req->execute();
            while($data = $req->fetch()){
                $id = $data['id_util'];
                $nom = $data['nom_util'];
                $prenom = $data['prenom_util'];
                echo '<p><input type="checkbox" name="idUtil[]" value="'.$id.'"><a href="updateUtilisateur.php?id='.$id.'">'.$nom.' '.$prenom.'</a></p>';
            }
        }
        catch(Exception $e){
            // affichage d'une exception en cas d'ereur
            die('Erreur '.$e->getMessage());
        }
    }


    //requête qui supprime un utilisateur
    function deleteUtilisateur($bdd, $id){
        try{
            $req = $bdd->prepare('DELETE FROM utilisateur WHERE id_util = :id_util');
            $req->execute(array(
                'id_util' => $id
            ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }
    

    // requête qui met à jour un utilisateur
    function updateUtilisateur($bdd, $id, $nom, $prenom, $mail, $mdp){
        try{
            $req = $bdd->prepare('UPDATE utilisateur 
            SET nom_util = :nom_util, prenom_util = :prenom_util, mail_util = :mail_util, mdp_util = :mdp_util
            WHERE id_util = :id_util');
            $req->execute(array(
                'id_util' => $id,
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp
            ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }


    // requête de verification des mails
    function mailTrouver($bdd, $mail){
        try{
            $req = $bdd->prepare('SELECT mail_util FROM utilisateur');
            $req->execute();
            while($data = $req->fetch()){
                if($mail == $data['mail_util']){
                    return true;
                }
            }
            return false;
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // requête de pre-remplissage des champs du fomulaire de modification 
    function remplirChamps($bdd, $id, $champNom, $ChampPrenom, $champMail, $champMdp){
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateur
            WHERE id_util = :id_util');
            $req->execute(array(
                'id_util' => $id
            ));

        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
?>

