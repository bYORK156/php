<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<!-- // Debug des erreurs PHP -->
ini_set('display_errors', 1);
<!-- //display error est activé en mettant valeur 1 -->
ini_set('display_startup_errors', 1);
<!-- // doit être activé pour afficher les erreur -->
error_reporting(E_ALL);
<!-- // configure PHP pour signaler tous les types d'erreurs -->



<h1>bonjour</h1>

<h2>premiers pas en PHP</h2>

<?php
// POUR PLUSIEURS COMMENTAIRE

/*Document

*je suis 

*un commentaire

*en plusieurs

*/

echo "<h2> cour1 </h2>";
echo "<p>bonjour<p/> ";

// $ pour la variable exemple 

$vermisselle;
$vermisselle="italiano";

echo $vermisselle;


echo "<p>ma variable est : $vermisselle</p>";

?>

<h2> les variables</h2>

<p>definition:  une variable est un espcae mémoire qui porte un nom et permette de conserver une valeur</p>

<?php
$a=1235;

echo gettype($a). "<br>";

// gettype( sert à afficher le type de caractère ça sert)

$b="jacki";
echo gettype($b). "<br>";

$c=true;
echo gettype($c). "<br>";


$d=123.50;
echo gettype($d). "<br>";

$content="<div>";
$content .="valeur de \$ est : $a";
$content="</div>";

echo $content;


?>

<h2>les constanters et constante magique</h2>
<h3>une constant se déclare toujours en MAJUSCULE</h3>

<?php
define("ROOT","https://github.com/PoleS-dev/premier_jour");
define("ORDI","je suis un ordi");

echo ORDI ."<br/>";
echo ROOT ."<br/>";


?>

<H1> LES CNSTANTES MAGIQUES </H1>


affiche le numéro de la ligne ici 94
echo __LINE__;
(br);



</body>
</html>