<?php 





?>

<h1> LES BOUCLES </h1>

<!-- BOUCLER UN TABELAU ASSOCIATIF -->

FOR EACH : la boucle foreach() fonctionne UNIQUEMENT sur les tableaux ou objets , <br> erreur si on boucle sur une variable non ARRAY (tableau)
le mot clé "as" est obligatoire <br>
<br>
<br>

il ya deux façon decrire la boucle foreach : 



<?php


$users=[

"id"=>123,
"email"=>"gg@gmail.com",
"age"=>25


];

foreach( $users as $valeur){
    echo "je suis la valeur : " .$valeur ."<br>";

}

echo "<br>";

foreach ($users as $clé => $valeur) {

    echo "je suis la clé : ".$clé. " et je suis la valeur : ".$valeur ."<br>";


}
?>

FOREACH AVEC UN TABLEAU INDEXE
<br>



<?php

$ville =[ "toulon" , "paris" , "barcelone" ];

    echo "<br>";
    
    foreach($ville as $index){

    echo "ma ville est : " .$index ."<br>";

}

foreach ($ville as $index=>$valeur){
    echo "ma ville est : " .$index ." et son index." .$index. "<br>";
}

?>

<h1> LA BOUCLES  FOR </h1>

<!-- EXEMPLE DE BOUCLE FOR -->

<?php
$tab=["123","124","125"];

for($i=0; $i<count ($tab);$i++){
echo $tab[$i]."<br>";
}


//  avec la boucle for vous avez plus de controle sur l'index, par exemple vous pouvez commencer la boucle à l'index de votre choix.


// boucle for dans un tableau associatif 


// $tab2=[
//     "id"=>123,
//     "email"=>"gg@gmail.com",
//     "age"=>25
// ];

// for($i=0 ; $i<count($tab2);$i++){
//     echo $tab2[$i];

// }

// l'exemple ci-desous montre des erreurs car on ne peux pas boucler un tableau associatif avec la boucle FOR n'ayant pas d'index
// ON UTILISE DONC LA BOUCLE foreach 



// LA BOUCLE while


$i=0 ; // valeur de départ de la boucle 

while($i<5){  //tant que la valeur i est inférieur à 5 nous entrons dans la boucle  (la valeur de $i) 
    echo "$i---";  //tu affiche la valeur de $i
    $i++;    // on oublie pas d"incrementer de 1 à chaque tour de boucle pour ne pas avoir une boucle infinie 
}
  // pas besoin de mettre ";" à la fin de l'accolade


//   LA BOUCLE DO...WHILE 

$jus=10;

do{$jus++;
    echo $jus." ";
    echo "je bois du jus <br>";
}while($jus>10 && $jus <20);





