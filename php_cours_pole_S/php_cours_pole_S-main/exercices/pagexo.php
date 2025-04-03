<?php

/** EXERCICE 1 : CONCATÉNATION SIMPLE
*  
*  1 . CRÉER DEUX VARIABLES NOM ET PRENOM ET AFFECTER LES VALEURS DE SON CHOIX
* 
*  2 . CONCATENER CES DEUX VARIABLES POUR AFFICHER UNE CHAÎNE DE CARACTÈRE DU NOM ET PRÉNOM COMPLETS AVEC ECHO
*/
 
/** EXERCICE 2 : CONCATENATION AVEC DES PHRASES
* 
*  1 . CRÉER UNE VARIABLE PHRASE1 QUI CONTIENDRA LA CHAINE DE CARACTÈRES : LE CIEL EST
* 
*  2 . CRÉER UNE VARIABLE PHRASE2 QUI CONTIENDRA LA CHAINE DE CARACTÈRES : BLEU AUJOURD'HUI 
* 
*  3 . CONCATENER LES DEUX VARIABLES EN UTILISANT VARIABLE . VARIABLE ET AFFICHER LE RESULTAT AVEC ECHO
*/


// exo 1 : 
$nom = "jean";
$prenom = "christophe";

echo "$nom" .' '. "$prenom";

// exo 2 : 

$phrase1 = "le ciel est";

$phrase2 = "bleu aujourd'hui";

echo "$phrase1" . "$phrase2";

// -------------------------------------------------------

$nom="Neo";

$prenom="Eon";



echo "<p> Bonjour". " " . $nom . " " . $prenom . "</p><br>";




/** EXERCICE 4 : CONCATENATION AVEC L'OPÉRATEUR COMBINÉ ".="
* 
*  1 . CRÉER UNE VARIABLE TEXTE AVEC LA VALEUR : JE VAIS
* 
*  2 . UTILISER L'OPÉRATEUR COMBINÉ POUR AJOUTER : À LA PLAGE
* 
*  3 . AFFICHER LE RESULTAT
* 
*/


?>

<?php
$texte = "je vais";

$texte .= ' ';
$texte .=  "à la plage";

echo $texte;

?>


/** Exercice 6 : Quotes simples et doubles
* 
*  1 . Créer une variable mot qui contiendra la chaine de caractères : PHP
* 
*  2 . Utiliser echo pour afficher cette variable à l'interieur d'une chaine entourée de quotes doubles (exemple : echo "le mot est : $mot")
* 
*  3 . Faire la même chose mais avec des quotes simple et observer la différence
* 
*/

$mot = "PHP";
echo "le mot est : $mot";
echo `le mot est : $mot`;
echo 'le mot est : $mot';







<ul>

<?php
$count = 2000;
while ($count <= 2025) {

echo "<li> nous sommes l'année : $count </li>";
$count++;
}

 ?>


</ul>



<?php


$i = 3;
do {
    if ($i %3 == 0 ){
        echo "ceci est une multiple de  : $i <br>";
    }
$i++;
} while ($i <= 30);


?>


<?php


$count=5;

for($i=0; $i<=10; $i++){
$resultat = $count * $i;
echo "$count" . "x" . $i. "=" . $resultat.  "<br>";

};

 ?>

<!-- table multifor ($nb1=1; $nb1 <=10 ; $nb1++) {
    for ($i=1; $i <=10 ; $i++) {
        echo "$nb1 x $i =" . $nb1*$i;
        echo "<br>";
    }
    echo "<br>"; -->

    <ul>

    <?php
       for ($nb1=1; $nb1 <=10 ; $nb1++) {
    for ($i=1; $i <=10 ; $i++) {
        echo "$nb1 x $i =" . $nb1*$i;
        echo "<br>";
    }
    echo "<br>";
}
 ?>

</ul>


<table style="border: 1px solid black; padding:5px">
   
        <?php
 
        for ($n=1; $n<=5; $n++){
            echo "<tr>";
            for($x=1; $x<=5; $x++){
                echo "<td style='border : 1px solid black'>$n$x</td>";
                }
            "</tr>";
        }
 
        ?>
 
</table>