<?php 
    // requête qui ajoute un produit
    function insertProduit($bdd, $nom, $contenu){
        try{
            $req = $bdd->prepare('INSERT INTO produit(nom_produit, contenu_produit) 
            VALUES(:nom_produit, :contenu_produit)');
            $req->execute(array(
                'nom_produit' => $nom,
                'contenu_produit' =>$contenu
            ));

        }
        catch(Exception $e){
            // affichage d'une exception en cas d'ereur
            die('Erreur '.$e->getMessage());
        }
    }


    // requête qui affiche tous les produits en BDD
    function showAllPoduit($bdd){
        try{
            $req = $bdd->prepare("SELECT * FROM produit");
            $req->execute();
            while($data = $req->fetch()){
                $idProd = $data['id_produit'];
                $nomProd = $data['nom_produit'];
                echo '<p><input type="checkbox" name="id_prod[]" value="'.$idProd.'"><a href="updateProduit.php?id='.$idProd.'">'.$nomProd.'</a></p>';
            }
        }
        catch(Exception $e){
            // affichage d'une exception en cas d'ereur
            die('Erreur '.$e->getMessage());
        }
    }
    

    //requête qui supprime un produit (table->produit)
    function deleteProduit($bdd, $id){
        try{
            $req = $bdd->prepare('DELETE FROM produit WHERE id_produit = :id_produit');
            $req->execute(array(
                'id_produit' => $id
            ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }


    //requête qui met à jour un produit
    function updateProduit($bdd, $id, $nom, $contenu){
        try{
            $req = $bdd->prepare('UPDATE produit 
            SET nom_produit = :nom_produit, contenu_produit = :contenu_produit
            WHERE id_produit = :id_produit');
            $req->execute(array(
                'id_produit' => $id,
                'nom_produit' => $nom,
                'contenu_produit' => $contenu
            ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }
?>

