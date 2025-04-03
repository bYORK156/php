<?php

var_dump($_GET);


?>


<?php     

//htmlspecialchars(): pour éviter les attaques, c'est une sécurité

if (isset($_GET["ville"])){   //vérifie si la clé "nom" existe
    echo $_GET["ville"] ;

}else{ // si la clé "nom" n'existe pas alors tu affihce "article"
    echo $_GET["prix"];
}




if(array_key_exists("ville",$_GET)){ // vérifie si la clé "ville" existe
        echo $_GET["ville"];
}else{

    echo $_GET["couleur"]."<br>";
    echo $_GET["prix"]."<br>";
    
}


?>



<a href="PAGE01.php">Aller</a>