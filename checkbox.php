<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Cocher une ou plusieurs checkbox :</h4>
    <!--Formulaire HTML-->
    <form action="" method="post">
        <p><input type="checkbox" name="box[]" value="1"/>1</p>
        <p><input type="checkbox" name="box[]" value="2"/>2</p>
        <p><input type="checkbox" name="box[]" value="3"/>3</p>
        <p><input type="checkbox" name="box[]" value="4"/>4</p>
        <p><input type="checkbox" name="box[]" value="5"/>5</p>
        <p><input type="submit" value="Récupérer"></p>
    </form>
    <h4>Liste des checkbox cochées :</h4>
    <!--Code PHP-->
    <?php
        //vérification de la super globale $_POST['box']
        if(isset($_POST['box'])){
        //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
            foreach($_POST['box'] as $value){
                echo "<p>id de la box : $value</p>";
            }
        }
        else{
            echo "<p>Veuillez cocher une ou plusieurs checkbox</p>";
        }
        
    ?>
</body>
</html>

