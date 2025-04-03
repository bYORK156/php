<?php
// Vérification des données reçues
$nom = isset($_GET['nom']) ? htmlspecialchars($_GET['nom']) : 'Nom inconnu';
$email= isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Nom inconnu';
 
var_dump($_GET);
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
    <h2>Données reçues :</h2>
    <p><strong>Nom :</strong> <?= $nom ?></p>
    <p><strong>email :</strong> <?= $email ?></p>
 
    <a href="exoformulaire.php">⏪ Revenir au formulaire</a>
</body>
</html>