<?php
    // Fonction de redirection vers une page avec un delai en ms
    function redirection($dest, $duree){
        echo '
        <script>
            setTimeout(()=>{
                document.location.href="'.$dest.'"; 
            }, '.$duree.');
        </script>';
    }


    // Fonction qui enleve les balises <script></script> ou <html></html> d'une chaine de caractères
    function removeScriptJs($chain){
        if(substr($chain, 0,8) == '<script>'){
            return substr($chain, 8);
        }
        else if(substr($chain, 0,6) == '<html>'){
            return substr($chain, 6);
        }
        else{
            return $chain;
        }
    }
?>

