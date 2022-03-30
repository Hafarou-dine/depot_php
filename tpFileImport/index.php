<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import de fichier</title>
</head>
<body>
    <h2>Importer une image</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <p><button type="submit">importer</button></p>
    </form>

    <?php 
        // inclure le fichier de connexion à la bdd
        include "./utils/connexionBDD.php";
        // inclure le fichier des fonctions
        include "./utils/fonctions.php";
        $data = getNbImages($bdd);
        $nbImg = $data['nb_img'];
        // bonus 
        echo "<p>Il y a $nbImg images en BDD</p>";
        $data = getCounter($bdd);
        $cpt = $data['cpt_nbr'];
        $id = $data['id_nbr'];
        if(isset($_FILES['file'])){
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
            //récupération de l'extension
            $ext = get_file_extension($name);
            $nameFile = "image$cpt.$ext";
            $url = "./image/$nameFile";
            move_uploaded_file($tmpName, $url);
            insertImage($bdd, $nameFile, $url);
            $cpt++;
            updateCounter($bdd, $id, $cpt);
            echo "<p>Le fichier $nameFile a été ajouté en BDD</p>";
            echo '
            <script>
                setTimeout(()=>{
                    document.location.href="index.php"; 
                }, 3000);
            </script>';
        }
    ?>
</body>
</html>

