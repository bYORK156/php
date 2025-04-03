<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
$jour = 3;

switch ($jour) { //on compare la variable $couleur avec la variable des cases

    case 1 : 
        echo "<p>nous sommes lundi</p>";
        break; // est obligatoire pour quitter les conditions une fois la case exécutée

    case 2 : 
        echo "<p>nous sommes mardi</p>";
        break;
    
    case 3 : 
        echo "<p>nous sommes mercredi</p>";
        break;
    case 4 :    
        echo "<p>nous sommes jeudi</p>";
        break;
    case 5 :
        echo "<p>nous sommes vendredi</p>";
        break;
    
    default:
        echo "<p>c'est le weekend</p>";
        break;

    }

    

?>




<?php
$prenom = "jean";

echo " <h2> mon prenom est " . $prenom ."<h2>"; 



?>

<h2>
    <?php  echo $prenom ?>
</h2>

