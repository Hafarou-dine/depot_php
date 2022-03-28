<?php 
    // fonction d'ajout d'un produit
    function insertProduit($bdd, $nom, $contenu){
        try{
            $req = $bdd->prepare('INSERT INTO produit(nom_produit, contenu_produit) 
            VALUES(:nom_produit, :contenu_produit);');
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

?>