<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong>Formulaire en methode post</strong><br>
    <form action="" method="post">
        <p>Saisir son nom :</p>
        <input type="text" name="nom">
        <p>Saisir son genre :</p>
        <select name="genre" >
            <option value="1">
                Femme
            </option>
            <option value="2">
                Homme
            </option>
            <option value="3">
                Autre
            </option>   
        </select>
        <p><input type="submit" value="Envoyer"></p>
    </form><br>

    <?php 
        /* Exercice 3 :
        Afficher le nom, et le genre sélectionné dans la page. (méthode post) */

        if(isset($_POST["nom"]) && isset($_POST["genre"]) && $_POST["nom"] != "" && $_POST["genre"] != ""){
            $nom = $_POST["nom"];
            $genre = $_POST["genre"];
            echo "$nom est ";
            switch($genre){
                case 1:
                    echo "une Femme";
                    break;
                case 2:
                    echo "un Homme";
                    break;
                case 3:
                    echo "du genre Autre";
                    break;
            }
        }
        else{
            echo "Veuillez remplir les champs du formulaire";
        }
    ?>
</body>
</html>

