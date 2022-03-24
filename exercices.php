<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* -------------------- Les variables -------------------- */
        echo "<strong>Les variables</strong><br>";
        /* Exercice 1 :
        -Créer une variable de type int avec pour valeur 5,
        -Afficher le contenu de la variable (utilisation de la fonction php echo),
        -Afficher son type (utilisation de la fonction php gettype),
        -Créer une variable de type String avec pour valeur votre prénom,
        -Afficher le contenu de la variable (utilisation de la fonction php echo),
        -Créer une variable de type booléen avec pour valeur false,
        -Afficher son type (utilisation de la fonction php gettype). */
        echo "<strong>Exercice 1</strong><br>";    
        $varEntier = 5;
        echo $varEntier;
        echo "<br>";
        echo gettype($varEntier);
        echo "<br>";
        $prenom = "Hafarou-dine";
        echo $prenom;
        echo "<br>";
        $boolVar = false;
        echo gettype($boolVar);
        echo "<br><br>";


        /* -------------------- Les operateurs -------------------- */
        echo "<strong>Les operateurs</strong><br>";
        /* Exercice 1 :
        -Créer 2 variables $a et $b qui ont pour valeur 12 et 10,
        -Stocker le résultat de l’addition de $a et $b dans une variable $total,
        -Afficher le résultat (utilisez la fonction echo) */
        echo "<strong>Exercice 1</strong><br>";
        $a = 12; 
        $b = 10;
        $total = $a + $b;
        echo "$a + $b = $total";
        echo "<br><br>";

        /* Exercice 2 :
        -Créer 3 variables $a, $b et $c qui ont pour valeur $a =5, $b =3 et $c = $a+$b,
        -Afficher la valeur de chaque variable (utilisez la fonction echo).,
        -passer la valeur de $a à 2,
        -Afficher la valeur de $a,
        -passer la valeur de $c à $b - $a,
        -Afficher la valeur de chaque variable (utilisez la fonction echo). */
        echo "<strong>Exercice 2</strong><br>";
        $a = 5;
        $b = 3; 
        $c = $a + $b;
        echo "\$a = $a <br> \$b = $b <br> \$c = $c<br>";
        $a = 2;
        echo "\$a = $a<br>";
        $c = $b - $a;
        echo "\$a = $a <br> \$b = $b <br> \$c = $c";
        echo "<br><br>";


        /* Exercice 3 :
        -Créer 2 variables $a et $b qui ont pour valeur 15 et 23,
        -Afficher la valeur de chaque variable (utilisez la fonction echo).,
        -Intervertissez les valeurs de $a et $b,
        -Afficher la valeur de $a et $b (utilisez la fonction echo). */
        echo "<strong>Exercice 3</strong><br>";
        $a = 15;
        $b = 23;
        echo "\$a = $a <br> \$b = $b <br>";
        $tmp = $b;
        $b = $a;
        $a = $tmp;
        echo "\$a = $a <br> \$b = $b";
        echo "<br><br>";
        

        /* Exercice 4 :
        -Ecrire un programme qui prend le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui fournit le prix
        total TTC correspondant.
        -Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
        -Afficher le résultat (utilisez la fonction echo). */
        echo "<strong>Exercice 4</strong><br>";

        function calculerPrix($prixArticle, $nbArticles, $tva){
            echo "prixArticle = $prixArticle<br> nbrArticles = $nbArticles<br> tva = $tva<br>";
            // $prixttc = ($prixArticle * $nbArticles) + (($prixArticle * $nbArticles) * $tva / 100);
            $prixttc = $prixArticle * $nbArticles * (1 + ($tva / 100));
            return "Le prix TTC est de : $prixttc";
        }

        echo calculerPrix(10, 2, 20);





        

    ?>    
</body>
</html>


<!-- exercices.php -->










