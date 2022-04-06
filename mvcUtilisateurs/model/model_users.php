<?php
    // Fonction qui ajoute un utilisateur en BDD
    function addUser($bdd, $nom, $prenom, $mail, $mdp){
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur(nom_util, prenom_util, mail_util, mdp_util) 
            VALUES(:nom_util, :prenom_util, :mail_util, :mdp_util);');
            $req->execute(array(
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp,
            ));
        }
        catch(Exception $e){
            // affichage d'une exception en cas d'ereur
            die('Erreur : '.$e->getMessage());
        }

    }

    
    // Fonction qui renvoie une liste de tous les utilisateurs en BDD
    function showUsers($bdd){
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateur;');
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // Fonction qui supprime un utilisateur
    function deleteUser($bdd, $id){
        try{
            $req = $bdd->prepare('DELETE FROM utilisateur
            WHERE id_util = :id_util;');
            $req->execute(array(
                'id_util' => $id
            ));
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // Fonction qui met à jour un utilisateur
    function updateUser($bdd, $id, $nom, $prenom, $mail, $mdp){
        try{
            $req = $bdd->prepare('UPDATE utilisateur
            SET nom_util = :nom_util, prenom_util = :prenom_util, mail_util = :mail_util, mdp_util = :mdp_util
            WHERE id_util = :id_util;');
            $req->execute(array(
                'id_util' => $id,
                'nom_util' => $nom,
                'prenom_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp
            ));
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }



    // Fonction qui verifie si une adresse email existe déja en BDD
    function mailExiste($bdd, $newMail){
        $liste = showUsers($bdd);
        foreach($liste as $value){
            if($value['mail_util'] == $newMail){
                return true;
            }
        }
        return false;
    }


    // Fonction qui renvoie les details d'un utiisateur 
    function showUser($bdd, $id){
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateur
            WHERE id_util = :id_util;');
            $req->execute(array(
                'id_util' => $id
            ));
            return $req->fetch(PDO::FETCH_ASSOC);
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }

?>

