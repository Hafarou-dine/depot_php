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
        echo "<br><strong>Les operateurs</strong><br>";
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
            /* $total = $prixArticle * $nbArticles;
            $prixttc = $total + $total * $tva / 100; */
            $prixttc = $prixArticle * $nbArticles * (1 + ($tva / 100));
            return "Le prix TTC est de : $prixttc";
        }
        echo calculerPrix(10, 2, 20);
        echo "<br><br>";



        /* -------------------- La concatenation -------------------- */
        echo "<br><strong>La concatenation</strong><br>";
        /*  Exercice 1 :
        -Créer une variable $a qui a pour valeur « bonjour »,
        -Afficher le nom de la variable et sa valeur. */
        echo "<strong>Exercice 1</strong><br>";
        $a = "bonjour";
        echo "\$a : $a";
        echo"<br><br>";


        /* Exercice 2 :
        -Créer 1 variable $a qui a pour valeur « bon »,
        -Créer 1 variable $b qui a pour valeur « jour »,
        -Créer 1 variable $c qui a pour valeur 10,
        -Concaténer $a, $b et $c +1,
        -Afficher le résultat de la concaténation. */
        echo "<strong>Exercice 2</strong><br>";
        $a = "bon";
        $b = "jour";
        $c = 10;
        $c1 = $c + 1;
        $concat = "$a$b$c1";
        // $concatBis = "{$a}{$b}{$c1}";
        echo $concat;
        // echo "<br>";
        // echo $concatBis;
        echo"<br><br>";

        /* Exercice 3 :
        -Créer une variable $a qui a pour valeur $bonjour,
        -Afficher un paragraphe (balise html) et à l’intérieur les mots suivants :l’adrar,
        -Ajouter la variable $a avant la phase dans le paragraphe,
        -Cela doit donner :
        <p>bonjour l’adrar</p> */
        echo "<strong>Exercice 3</strong><br>";
        $a = "bounjour ";
        echo "<p>{$a}l'adrar</p>";



        /* -------------------- Les fonctions -------------------- */
        echo "<br><strong>Les fonctions</strong><br>";
        /* Exercice 1 :
        -Créer une fonction qui soustrait à $a la variable $b (2 paramètres en entrée),
        -la fonction doit renvoyer le résultat de la soustraction $a-$b (return). */
        echo "<strong>Exercice 1</strong><br>";
        function soustraire($a, $b){
            $res = $a - $b;
            return "$a - $b = $res";
        }
        echo soustraire(101, 1);
        echo "<br>";
        echo soustraire(100, 20);
        echo "<br><br>";

        /* Exercice 2 :
        -Créer une fonction qui prend en entrée un nombre à virgule (float),
        - la fonction doit renvoyer l’arrondi (return) du nombre en entrée. */
        echo "<strong>Exercice 2</strong><br>";
        function arrondir($floatNum){
            $res = round($floatNum);
            return "L'arrondi de $floatNum est : $res";
        }
        echo arrondir(3.4);
        echo "<br>";
        echo arrondir(4.6);
        echo "<br><br>";

        /* Exercice 3 :
        -Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs. */
        echo "<strong>Exercice 3</strong><br>";
        function sommeDesTrois($x, $y, $z){
            $res = $x + $y + $z;
            return "$x + $y +$z = $res";
        }
        echo sommeDesTrois(1, 2, 3);
        echo "<br>";
        echo sommeDesTrois(5, 5, 5);
        echo "<br><br>";

        /* Exercice 4 :
        -Créer une fonction qui prend en entrée 3 valeurs et retourne la valeur moyenne des 3 valeurs (saisies en paramètre). */
        echo "<strong>Exercice 4</strong><br>";
        function moyenneDesTrois($x, $y, $z){
            $res = ($x+$y+$z)/3;
            return "La moyenne de $x, $y et $z est : $res";
        }
        echo moyenneDesTrois(5, 5, 5);
        echo "<br>";
        echo moyenneDesTrois(17, 12, 13);
        echo "<br><br>";



        /* -------------------- Les conditions -------------------- */
        echo "<br><strong>Les conditions</strong><br>";
        /* Exercice 1 :
        -Créer une fonction qui teste si un nombre est positif ou négatif (echo dans la page web). */
        echo "<strong>Exercice 1</strong><br>";
        function testPositif($nombre){
            if($nombre > 0){
                echo "$nombre est positif";
            }
            else if($nombre == 0){
                echo "$nombre est egale à 0";
            }
            else{
                echo "$nombre est negatif";
            }
        }
        echo testPositif(12);
        echo "<br>";
        echo testPositif(0);
        echo "<br>";
        echo testPositif(-12);
        echo "<br><br>";


        /* Exercice 2 :
        -Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web). */
        echo "<strong>Exercice 2</strong><br>";
        function plusGrand($nombre1, $nombre2, $nombre3){
            if($nombre1 >= $nombre2){
                if($nombre1 > $nombre3){
                    $maxi = $nombre1;
                }
                else{
                    $maxi = $nombre3;
                }
            }
            else if($nombre2 > $nombre3){
                $maxi = $nombre2;
            }
            else{
                $maxi = $nombre3;
            }
            return "Le plus grand nombre entre $nombre1, $nombre2 et $nombre3 est $maxi";
        }
        echo plusGrand(10, 5, 2);
        echo "<br>";
        echo plusGrand(10, 10, 12);
        echo "<br>";
        echo plusGrand(10, 20, 12);
        echo "<br><br>";


        /* Exercice 3 :
        -Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit (echo dans la page web). */
        echo "<strong>Exercice 3</strong><br>";
        function plusPetit($nombre1, $nombre2, $nombre3){
            if($nombre1 <= $nombre2){
                if($nombre1 < $nombre3){
                    $maxi = $nombre1;
                }
                else{
                    $maxi = $nombre3;
                }
            }
            else if($nombre2 < $nombre3){
                $maxi = $nombre2;
            }
            else{
                $maxi = $nombre3;
            }
            return "Le plus petit nombre entre $nombre1, $nombre2 et $nombre3 est $maxi";
        }
        echo plusPetit(10, 5, 2);
        echo "<br>";
        echo plusPetit(10, 5, 12);
        echo "<br>";
        echo plusPetit(10, 20, 12);
        echo "<br><br>";


        /* Exercice 4:
        -Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans
        la page web) :
        x "Poussin" de 6 à 7 ans
        x "Pupille" de 8 à 9 ans
        x "Minime" de 10 à 11 ans
        x "Cadet" après 12 ans
        Bonus : Refaire l’exercice en utilisant le switch case.*/
        echo "<strong>Exercice 4</strong><br>";
        // Vesrion de la focntion avec les if 
        function categorieEnfantif($age){
            if($age>=12){
                echo "L'enfant est dans la categogie: Cadet";
            }
            elseif($age>=10 && $age<=11){
                echo "L'enfant est dans la categogie: Minime";
            }
            elseif($age>=8 && $age<=9){
                echo "L'enfant est dans la categogie: Pupille";
            }
            elseif($age>=6 && $age<=7){
                echo "L'enfant est dans la categogie: Poussin";
            }
            else{
                echo "L'enfant n'est dans aucune categogie";
            }
        }

        // vesrsion de la fonction avec switch case
        function categorieEnfantSwitch($age){
            switch($age){
                case($age>=12):
                    echo "L'enfant est dans la categogie: Cadet";
                    break;
                
                case($age>=10 && $age<=11):
                    echo "L'enfant est dans la categogie: Minime";
                    break;

                case($age>=8 && $age<=9):
                    echo "L'enfant est dans la categogie: Pupille";
                    break;

                case($age>=6 && $age<=7):
                    echo "L'enfant est dans la categogie: Poussin";
                    break;
                
                default:
                    echo "L'enfant n'est dans aucune categogie";
                    break;
            }
        }

        // Tests
        echo "--------------------------- Test de la version avec les if ---------------------------<br>";
        categorieEnfantif(14);
        echo "<br>";
        categorieEnfantif(11);
        echo "<br>";
        categorieEnfantif(8);
        echo "<br>";
        categorieEnfantif(6);
        echo "<br>";
        categorieEnfantif(5);
        echo "<br><br>";
        echo "--------------------------- Test de la version avec le switch ---------------------------<br>";
        categorieEnfantSwitch(14);
        echo "<br>";
        categorieEnfantSwitch(11);
        echo "<br>";
        categorieEnfantSwitch(8);
        echo "<br>";
        categorieEnfantSwitch(6);
        echo "<br>";
        categorieEnfantSwitch(5);
        echo "<br><br>";



        /* -------------------- Les boucles -------------------- */
        echo "<br><strong>Les boucles</strong><br>";
        /* Exercice 1 :
        Créer un script qui affiche les nombres de 1 -> 5 (méthode echo). */
        echo "<strong>Exercice 1</strong><br>";
        for($i=1; $i<=5; $i++){
            echo "$i<br>";
        }
        echo "<br>";

        /* Exercice 2 :
        Ecrire une fonction qui prend un nombre en paramètre (variable $nbr), et qui ensuite affiche les dix nombres
        suivants. Par exemple, si la valeur de nbr équivaut à : 17, la fonction affichera les nombres de 18 à 27 (méthode echo). */
        echo "<strong>Exercice 2</strong><br>";
        function dixSuivannts($nombre){
            echo "Les dix nombres suivant $nombre sont:<br>";
            for($i=$nombre+1; $i<=$nombre+10; $i++){
                echo "$i<br>";
            }
        }
        dixSuivannts(10);
        echo "<br>";
        dixSuivannts(500);
        echo "<br>";


        /* Exercice Bonus 1 :
        Exercice créer un tableau de 10 colonnes (en utilisant un boucle) -> chaque colonne la valeur de l'index +1 */
        echo "<strong>Exercice Bonus 1</strong><br>";
        $tab = array();
        for($i=0; $i<10; $i++){
            $tab[$i] = $i+1;
        }
        var_dump($tab);
        echo "<br><br>";
            
        /* Exercice Bonus 2 :
        créer un tableau de 10 colonne avec un nombre aléatoire comprit entre (10, 30). */
        echo "<strong>Exercice Bonus 2</strong><br>";
        $tab = array();
        for($i=0; $i<10; $i++){
            $tab[$i] = rand(10, 30);
        }
        var_dump($tab);
        echo "<br><br>";

        /* -------------------- Les tableaux -------------------- */
        echo "<br><strong>Les tableaux</strong><br>";
        // tableau qui va servir pour tester les fonctions
        $tab = array(10, 12, 15, 3, 21, 25, 38, 18, 19, 20, 23, 24);
        $tabBis = array(10, 25, 6, 33, 58, 1, 49, 110);
        /* Exercice 1 :
        -Créer une fonction qui affiche la valeur la plus grande du tableau. */
        echo "<strong>Exercice 1</strong><br>";
        function plusGrandTab($tab){
            $len = count($tab);
            // cas general
            if($len > 0){
                $max = $tab[0];
                for($i=1; $i<$len; $i++){
                    if($tab[$i] > $max){
                        $max = $tab[$i];
                    }
                }
                // Affichage du resultat
                echo "Le maximum dans [";
                for($i=0; $i<$len-1; $i++){
                    echo "$tab[$i], ";
                }
                echo "{$tab[$len-1]}] ";
                echo "est : $max"; 
            }
            // cas d'erreur tableau vide
            else{
                echo "Impossible de calculer le maximum sur un tableau vide";
            }
            
        }
        plusGrandTab($tab);
        echo "<br>";
        plusGrandTab($tabBis);
        echo "<br><br>";


        /* Exercice 2 :
        -Créer une fonction qui affiche la moyenne du tableau. */
        echo "<strong>Exercice 2</strong><br>";
        function moyenneTab($tab){
            $len = count($tab);
            // cas general 
            if($len > 0){
                $somme = 0;
                foreach($tab as $value){
                    $somme += $value;
                }
                $moy = $somme / $len;
                // Affichage du resultat
                echo "La moyenne de [";
                for($i=0; $i<$len-1; $i++){
                    echo "$tab[$i], ";
                }
                echo "{$tab[$len-1]}] ";
                echo "est : $moy"; 
            }
            // cas d'erreur tableau vide
            else{
                echo "Impossible de calculer la moyenne sur un tableau vide";
            }
            
        }
        moyenneTab($tab);
        echo "<br>";
        moyenneTab($tabBis);
        echo "<br><br>";


        /* Exercice 3 :
        -Créer une fonction qui affiche la valeur la plus petite du tableau. */
        echo "<strong>Exercice 3</strong><br>";
        function plusPetitTab($tab){
            $len = count($tab);
            // cas general
            if($len > 0){
                $min = $tab[0];
                for($i=1; $i<$len; $i++){
                    if($tab[$i] < $min){
                        $min = $tab[$i];
                    }
                }
                // Affichage du resultat
                echo "Le mninimum dans [";
                for($i=0; $i<$len-1; $i++){
                    echo "$tab[$i], ";
                }
                echo "{$tab[$len-1]}] ";
                echo "est : $min";
            }
            // cas d'erreur tableau vide
            else{
                echo "Impossible de calculer le minimum sur un tableau vide";
            }
        }
        plusPetitTab($tab);
        echo "<br>";
        plusPetitTab($tabBis);
        echo "<br><br>";

    ?>    
</body>
</html>

