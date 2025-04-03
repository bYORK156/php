
<!--  
/*
 
1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/
  -->



<!-- 
function greet(){
    echo "hello world";
}
greet (); -->



<!-- 
2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction. -->



<?php
function greetUser($name){
   echo "Hello, $name!";
}
$a="seckene";
$b="nassuf";

greetUser($b);
 ?>

<!-- $name = "jean";
$greetUser = [
	 "name" => "Hello, $name!"];
echo $greetUser['name'];

/*
3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/
 
<?php
$a=4;
$b=6;
 
function sum($a, $b){
$result=$a+$b;
return $result;
}
echo sum($a, $b)

?>

/*
4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.
*/

<?php
 $v=[1,2,3,4,5];
 
function sumArray($v){
   
    $resultat = array_sum($v);
    return $resultat;
 
}
echo(sumArray($v))."<br>";
?>

/*
5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!
 
Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})
".
<?php
function greetWithTime($name="najiba"){
 
    function timeOfDay(){
      return date('d/m/Y H:i:s');
    }
   
    echo "  Salut  " ." " . $name ." ".timeOfDay() ;
}
 
 
greetWithTime();
 
 ?>


6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.
*/

<?php

function getFruitss() {
    return ["pomme","banane", "carotte"];
}

return (getfruitss());

?>

----------------
<?php

$fruitland=["cerises","mangue","poire"];
function getFruits(){
    global $fruitland;
    return $fruitland;
}



?>
/*
7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.
*/

// function reverseString($str) {
//     return strrev($str);
// }

<?php
function reverseString($str) {
    $reverse = "";

    $i = strlen($str) - 1;
    while($i >= 0) {
        $reverse .= $str[$i];
        $i--;
    }

    // for ($i = strlen($str) - 1; $i >= 0; $i--) {
    //     $reverse .= $str[$i];
    // }

    return $reverse;
}

echo reverseString("elicaF");

?>


/*
8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/

<?php

function divide($a, $b){
    if ($b !== 0){
        $somme = $a / $b;
        echo $somme;
    }else{
        echo "Error 404";
    }
    }
    
    $a = 5;
    $b = 6;
    
    divide($a,$b);
 ?>


/*
9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/
 <?php
function generateMultiplicationTable($number){
   
    for ($n=1; $n<=10; $n++){
        $resultat[$n]=$n*$number;
    }
 
    // foreach($resultat as $n=> $result){
    //     echo "$number x $n = $result<br>";
    // }
    echo "<pre>";
    print_r($resultat);
    echo "</pre>";
}
 
generateMultiplicationTable(9);
echo "<br>";
?>
 
/*
10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".
 
*/  --

<?php

function checkEligibility ($age, $hasLicense){
if ($age >=18 && $hasLicense === true){
    return "eligible";
}else {
 echo "not eligible";
}
}
echo checkEligibility(15, false);
?>



---------- à l'inverse--------------
<?php
$age = 18;
$hasLicense = false;

function checkEligibilityy($age, $hasLicense){
if($age < 18 || $hasLicense === false){
    echo "Not Eligible";
}else{
    echo "Eligible";
}
}
echo checkEligibilityy($age, $hasLicense);