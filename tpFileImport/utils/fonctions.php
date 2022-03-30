<?php 
    // fonction qui récupère le format du fichier extension
    function get_file_extension($file){
        return substr(strrchr($file,'.'),1);
    }


    // fonction qui renvoie le compteur(cpt_nbr)
    function getCounter($bdd){
        try{
            $req = $bdd->prepare('SELECT * FROM nbr');
            $req->execute();
            $data = $req->fetch();
            return $data;
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // requête de mise à jour de compteur
    function updateCounter($bdd, $id, $cpt){
        try{
            $req = $bdd->prepare('UPDATE nbr
            SET cpt_nbr = :cpt_nbr
            WHERE id_nbr = :id_nbr');
            $req->execute(array(
                'id_nbr' => $id,
                'cpt_nbr' => $cpt
            ));
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // requête d'ajout d'une nouvelle image
    function insertImage($bdd, $nom, $url){
        try{
            $req = $bdd->prepare('INSERT INTO images.image(nom_img, url_img) 
            VALUES(:nom_img, :url_img)');
            $req->execute(array(
                'nom_img' => $nom,
                'url_img' => $url
            ));
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // requête qui compte le nombre d'image dans le table image
    function getNbImages($bdd){
        try{
            $req = $bdd->prepare('SELECT count(id_img) AS nb_img FROM images.image');
            $req->execute();
            return $req->fetch();
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
?>

