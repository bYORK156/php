<?php

// LES FAUX -------------------------------------------------------*******


// IL EXISTES 3 TYPES DE TABLEAU EN PHP_AMQP_MAX_CHANNELS

// 1. tableau indexé
// 2. tableau associatif
// tableau mutlidimensionnel




// les tableau (array) index  ****
// déclaration d'un tableau il ya deux methodes

// 1er methode 
// (aaray) est une fonction de PHP
// $tab = array ("element0","element1", "element2");

// 2eme methode

// [] c'est une syntaxe plus collator_get_attribute
//  $tab2=["element0","element1", "element2"];

//  echo $tab; // me donnne une erreur "array to string  " car c'est tout simplement pas spossible de montrer une chaine de caractère dans un tableau 

//  echo $tab[0];

//  echo var_dump ($tab);
// $arr=2;

// $var_dump()
// affiche l'index la longuer du tableau et le type de chaque element 

// // var_dump($arr);

// // echo "<pre>;
// // print_r($tab);
// // echo </pre>";



?>

<?php    
 
ini_set('display_errors', 1);
error_reporting(E_ALL);
 
 
//******************* */  LES TABLEAUX***************
 
 
//Il existes 3 types de tableaux en PHP
 
// 1. Tableau indexé
// 2. Tableau associatif
// 3. Tableau multidimensionnel
 
 
 
// *****les tableaux (array) index *****
 
// declaration d'un tableau il y a deux methodes
 
 
//1er methode
// array() est une fonction de PHP
$tab = array( "NASSUF",2,true,123.5);
 
// 2eme methode
// [] c'est une syntaxe plus courte
$tab2=["element0","element1","element2"];
 
//echo $tab; // me donne une erreur array to string conversion
 
echo $tab[0] . " " . $tab[1] . " " . $tab[2] . " " . $tab[3];
// echo $tab[0,2]// ne marche pas si on veut afficher plusieur index
 
// fonction de debugage pour afficher le contenu du tableau
 
// var_dump()
// affiche l'index la longueur du tableau et le type de chaque element longueur de chaine de caractere
var_dump($tab);
 
 
 
// Print_r() est souvent accompagné de la balise <pre></pre> pour plus de lisibilité
// affiche moins d'infos que var_dump ( pour un débugage rapide)
echo "<pre>";
print_r($tab);
echo "</pre>";
 
 
// ***** te tableau associatif*****
 
// un tableau associatif est un tableau dans laquel on choisit la dénomination des index
 
$user1=[
 
    "id"=>123,
    "name_username"=>"Nassaf",
    "email"=>"nassaf@gmail.com"
];
 
print_r($user1);
 
echo "<br>";
 
echo $user1["email"];
//Ou
 
$user2=array(
 
    "id"=>123,
    "name_username"=>"Nassaf",
    "email"=>"nassaf@gmail.com"
);
 
echo "<br>";
 
    print_r($user2["id"]);
    echo "<br>";
    echo $user2["id"];
 
echo "<br>";
    var_dump($user2);
 
 
 /////tableau MUTLI DIMENSIONNELLE**********





 $users = [

    [
        "id" => 123,
        "name_username" => "nass",
        "email" => "nass@sfs.fr",
        "donne_perso" => [
            "name"=>"jean",
            "age" => 25
            ]
        ],


]



/** Exercice 3 : Créer et afficher un tableau associatif
*   Objectif : Travaillez avec un tableau associatif.
*   Instructions :
*   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
*   Affichez chaque information avec une phrase descriptive.
*/



// $info = array("non","prenom","age");

// array_push("voici les info" . $info);
// echo $info;
 
 
?>

<?php
 
ini_set('display_errors', 1);
    error_reporting(E_ALL);
 
// Ton tableau de test
$tab = [
    "a" => "hello",
    "b" => "",
    "c" => null,
    "d" => 0,
    "e" => false
];
echo "\$tab =";
echo "<pre>";
var_export($tab);
 
echo "</pre>";
 
// Liste des clés à tester, y compris une qui n'existe pas ("f")
$cles = ["a", "b", "c", "d", "e", "f"];
 
function boolToIcon($value) {
    return $value ? "✅" : "❌";
}
 
?>
 
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            background: white;
            box-shadow: 0 0 10px #ccc;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        .code {
            font-family: monospace;
            color: #333;
        }
    </style>
 
<body>
 
<h2> Analyse des fonctions <code>isset()</code>, <code>empty()</code> et <code>array_key_exists()</code></h2>
 
<table>
    <tr>
        <th>Clé</th>
        <th>Valeur</th>
        <th>isset()</th>
        <th>empty()</th>
        <th>array_key_exists()</th>
    </tr>
 
    <?php foreach ($cles as $cle): ?>
        <tr>
            <td><strong><?= $cle ?></strong></td>
            <td class="code">
                <?= array_key_exists($cle, $tab) ? var_export($tab[$cle]) : '<i>Non défini</i>' ?>
            </td>
            <td><?= boolToIcon(isset($tab[$cle])) ?></td>
            <td><?= boolToIcon(empty($tab[$cle])) ?></td>
            <td><?= boolToIcon(array_key_exists($cle, $tab)) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
 
</body>