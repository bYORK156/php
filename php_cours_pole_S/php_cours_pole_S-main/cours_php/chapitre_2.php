


<h1> la concaténation lors des affectations</h1>


<?php

$hello = "bonjour";
$everyone = "tout le monde";

echo "$hello" .' '. "$everyone";
echo $hello ." ". $everyone;


// attention à savoir 
// echo '$hello' //avec un single quote la variable est lu comme une chaine de caractère




$prenom = "shezad";
$prenom = "louis";

echo $prenom . "<br>";
// le point sert de "plus + " (concatener)


// concaténation lors de l'affectation ici on affecte une valeur 'nawel' à $prenom 
$prenom = "nawel";
$prenom .= ' ';
$prenom .= "najeba";

echo $prenom;


$bra = ".<br>";

$nom = "jean";
$prenom = "christophe";

echo "$nom" .' '. "$prenom";

$bra = ".<br>";

$phrase1 = "le ciel est";

$phrase2 = "bleu aujourd'hui";

echo $phrase1 . $phrase2;

?>