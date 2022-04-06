<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Utilisateur</title>
    <link rel="stylesheet" href="./asset/style/style.css">
</head>
<body>
    <header>
        <ul>
            <li><a href="./add_user.php">Ajouter Utilisateur</a></li>
            <li><a href="./show_all_users.php">Afficher Utilisateurs</a></li>
            <li><a href="./update_user.php">Modifier Utilisateur</a></li>
        </ul>
    </header>
    <h2>Ajouter un utilisateur</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Saisir le nom de l'utilisateur :</p>
        <input type="text" name="nom_util">
        <p>Saisir le prenom de l'utilisateur :</p>
        <input type="text" name="prenom_util">
        <p>Saisir le mail de l'utilisateur :</p>
        <input type="text" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
        <p>Saisir le mot de passe de l'utilisateur :</p>
        <input type="password" name="mdp_util">
        <!-- <p>Image de profil : <input type="file" name="img_util"></p> -->
        <p><input type="submit" value="Ajouter"></p>
    </form>
</body>
</html>

