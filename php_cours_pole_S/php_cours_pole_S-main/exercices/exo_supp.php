/*
|--------------------------------------------------------------------------
| Exercices PHP — Fonctions, Tableaux, Affichage HTML
|--------------------------------------------------------------------------
| Objectif : Approfondir la manipulation de tableaux, l'affichage HTML
| et la création de fonctions utiles dans des cas concrets (panier, fiche produit, etc).
| Niveau : Débutant
*/

echo "<h1>Liste des exercices PHP</h1>";
<hr>
/*
* EXERCICE 1 — Afficher une variable simple
* ------------------------------------------ <br>
* Crée une variable $prenom avec ton prénom et affiche-la dans une balise <h2>.
    */
    echo "<h2>1. Affichage d'une variable</h2>";

    <?php
    $prenom = "jean";

    echo " <h2> mon prenom est " . $prenom . "<h2>";
    ?>
    <h1>
         <?php echo $prenom ?>
    </h1>


<hr>
    /*
    * EXERCICE 2 — Affichage d’une fiche produit
    * ------------------------------------------
    * Crée un tableau associatif avec 'nom' => 'Stylo', 'prix' => 1.5
    * Affiche ces données dans une structure HTML (ex : <div class='card'>).
        */
        echo <h2>2. Affichage d'une fiche produit en HTML</h2>

        <div class="card">

            <?php
            $tableau = [
                'nom' => "stylo ",
                'prix' => 1.5
            ]
            ?>
            
                    <h2>
                        <?php
                        echo "le prix du " . $tableau["nom"] . "coute " . $tableau["prix"] . "€"; ?></h2>
                


        </div>
<hr>
        * EXERCICE 3 — Boucle sur un tableau simple
        * ------------------------------------------
        * Crée un tableau de 5 prénoms et affiche-les dans une liste HTML <ul>.
            * ➕ Fonction utile : foreach
            */
            echo "<h2>3. Liste de prénoms</h2>";

            <?php
            $groupeA = ["jean", "lucie", "varas", "seke", "juju"]
            ?>

            <ul>
                <?php echo $groupeA[2];
                foreach ($groupeA as $value) { ?>
                    <li>
                        <?php echo $value . "<br>";
                        ?>
                    </li>
                    
                    <?php }
                    ?>


            </ul>

<hr>


* EXERCICE 4 — Générer plusieurs "cartes produit"
* ----------------------------------------------- <br>
* À partir d’un tableau contenant plusieurs produits (nom + prix),
* boucler et afficher chaque produit dans une carte HTML.
*/
            echo "<h2>4. Cartes produit HTML avec boucle</h2>";
    <?php
        $courses = [
            'chaussure' => 25,
            'casque' => 30,
            'ordi' => 2005,
            'jus'=> 3
        ]

       

    ?>
     
        <?php 
        echo $courses [0];

        foreach ($courses as $carteProduit){
            
        };
            ?>
            
            <h2>
                <ul><li><?php echo "voici la listes des courses" . $carteProduit;?></li></ul>
            </h2>


            
            
    <!-- correction :  -->
    
    $tabProduct = [
    "PC Gamer" => 3000,
    "Ferrari Carbone" => 243000
    ];

foreach($tabProduct as $nom => $prix): ?>
    <!-- <div class="card">
        <h3><?php echo $nom; ?></h3>
        <p>Prix : <?php echo number_format($prix, 2, ',', ' ') . " €"; ?></p>
    </div>
<?php endforeach; ?>

 -->


<hr>

* EXERCICE 5 — Addition simple
* -----------------------------
* Crée deux variables $prix1 et $prix2, calcule la somme et affiche
* le total sous forme de texte : "Total : XX €"
*/
            echo "<h2>5. Addition de deux prix</h2>";

<!-- $prix1 = 29.99;
$prix2 = 45.50;
 
$total = $prix1 + $prix2;
 
echo "Total : " . $total . " €"; -->


            /*
* EXERCICE 6 — Ajouter la TVA
* ----------------------------
* Crée une fonction ajouterTVA($prix) qui retourne le prix TTC (20% de TVA).
* ➕ Math : $prix * 1.2
*/
<!-- echo "<h2>6. Calcul de la TVA</h2>";

echo "<h2>6. Calcul de la TVA</h2>"; 

function ajouterTVA($prix) 
{ 
return $prix * 1.2; 
} 

$prixHT = 100; 
$prixTTC = ajouterTVA ($prixHT); 

echo "Prix HT : " $prixHT " €<br>"; 
echo "Prix TTC" $prixTTC. " €";  -->


            /*
* EXERCICE 7 — Compter des éléments
* ---------------------------------
* Crée un tableau de produits et affiche le nombre total de produits.
* ➕ Fonction utile : count()
            <!-- echo "<h2>7. Compter les produits</h2>";

            $produitsss=["jupe","robe","pantalon","jupe","robe","pantalon"];
 
            echo count($produitsss); -->



* EXERCICE 8 — Fonction d'affichage réutilisable
* ----------------------------------------------
* Crée une fonction afficherProduit($produit) qui prend un tableau associatif
* et affiche une carte HTML avec le nom et le prix du produit.
*/
            echo "<h2>8. Fonction réutilisable pour afficher un produit</h2>";

            <!-- $produit3=[
    [
        'nom' => 'Stylo',
        'prix' => 1.5
    ],
    [
        'nom' => 'crayon',
        'prix' => 1.1
    ],
    [
        'nom' => 'cahier',
        'prix' => 2.1
    ]
];
 
function afficherProduit($produit3){
   
        foreach($produit3 as  $valeur ){
            echo " <div class='cart'><div class='valeur color'> " .$valeur["nom"] ."</div> <div class='valeur col'> ".$valeur["prix"] ."</div></div> <br>";
        }
    }
    echo afficherProduit($produit3); -->

           
* EXERCICE 9 — Total du panier
* -----------------------------
* À partir d’un tableau de produits (chacun avec 'nom' et 'prix'),
* calcule et affiche le total général avec une boucle.
*/
            echo "<h2>9. Total d'un panier</h2>";

            <!-- $panier = [
    ["nom" => "stylo", "prix" => 1.5],
    ["nom" => "cahier", "prix" => 2.0],
    ["nom" => "gomme", "prix" => 0.5],
];
$total = 0;
foreach ($panier as $produit) {
    $total += $produit['prix'];
}

echo "<p>Total du panier : $total €</p>";

echo "<h2>9. Total d'un panier</h2>";
             -->


* EXERCICE 10 — Appliquer une remise
* ----------------------------------
* Crée une fonction appliquerRemise($prix, $pourcentage)
* qui retourne le prix après réduction.
*/
            echo "<h2>10. Prix avec remise</h2>";

            <!-- $prix = 50;
$pourcentage = 30;

function appliquerRemise($prix, $pourcentage){
    
    $reduction = $prix * ($pourcentage/100);
    $total = $prix - $reduction;
    return $total;
}

echo appliquerRemise($prix, $pourcentage);    -->

           autre façon de faire avec pourcentage

<!-- $prix = 23;
$pourcentage = 3;

$tab1 = ['nom' => 'chaise', 'prix' => 23];

function appliquerRemise($prix, $pourcentage){
    $reduction = $prix * ($pourcentage/100);
    $total = $prix - $reduction;
    return $total;
}

$remise = appliquerRemise($tab1['prix'], $pourcentage);

$tab1['prix'] = $remise;

var_dump($tab1);
             -->

* EXERCICE 11 — Ajouter au panier
* -------------------------------
* Crée une fonction ajouterAuPanier($panier, $produit)
* qui retourne un nouveau tableau avec le produit ajouté.

            <!-- echo "<h2>11. Ajouter un produit au panier</h2>";

            echo "<h2>11. Ajouter un produit au panier</h2>";

$panier = ["banana", "litchi"];
$produit = "mokotra";

function ajouterAuPanier($panier, $produit) {
    $panier[] = $produit;
    return $panier;
}

$panier = ajouterAuPanier($panier, $produit);

echo "<pre>";
print_r($panier);
echo "</pre>";
  -->

  ou session_name


  <!-- echo "<h2>11. Ajouter un produit au panier</h2>";
$panier = ["banana", "litchi"];
$produit = "mokotra";
function ajouterAuPanier($array, $produitAdd) {
    $array[] = $produitAdd;
return $array;
}
$panier = ajouterAuPanier($panier, $produit);
echo "<pre>";
print_r($panier);
echo "</pre>";
echo count($panier)
?> <button>voir panier <?php echo count($panier) ?></button> -->

* EXERCICE 12 — Afficher un panier vide ou non
* --------------------------------------------
* Vérifie si un tableau $panier est vide. S'il l’est, afficher un message,
* sinon, afficher les produits.
* ➕ Fonction utile : empty()
*/
            echo "<h2>12. Vérification panier vide ou rempli</h2>";

            <!-- $panier1 = ["banana", "litchi"];

if (!empty($panier1)){
    echo "<p>not empty</p>";
}else{
    echo "<p>empty</p>";
} -->

            /*
* EXERCICE 13 — Moyenne des notes
* -------------------------------
* Crée un tableau de notes (ex : [12, 14, 18]) et calcule la moyenne.
* ➕ Fonctions utiles : array_sum(), count()
*/
            echo "<h2>13. Moyenne d'un tableau</h2>";

<!-- 
$notes = [12, 14, 18];

function calculDeMoyenne($array){
$moyenne = array_sum($array) / count($array);
return $moyenne;
}

echo "<p>Moyenne :".calculDeMoyenne($notes) ."</p>"; -->

        
* EXERCICE 14 — Trier un tableau
* -------------------------------
* Crée un tableau de prix, trie-le par ordre croissant.
* ➕ Fonction utile : sort()
*/
            echo "<h2>14. Tri des prix croissants</h2>";

            /*
* EXERCICE 15 — Filtrer produits à moins de 10 €
* ------------------------------------------------
* Crée une fonction qui retourne un tableau avec uniquement
* les produits à moins de 10€.
*/
            echo "<h2>15. Filtrer les produits abordables</h2>";

            /*
* EXERCICE 16 — Tableau d’utilisateurs
* -------------------------------------
* Crée un tableau avec plusieurs utilisateurs (nom, email, âge)
* et affiche-les dans des cartes HTML.
*/
            echo "<h2>16. Fiches utilisateurs</h2>";

            /*
* EXERCICE 17 — Table de multiplication
* --------------------------------------
* Crée une fonction tableMultiplication($n) qui affiche la table du nombre donné.
*/
            echo "<h2>17. Table de multiplication</h2>";

            /*
* EXERCICE 18 — Formater un prix
* -------------------------------
* Crée une fonction formaterPrix($prix) qui :
*  - affiche 2 chiffres après la virgule
*  - ajoute "€"
* ➕ Fonction utile : number_format()
*/
            echo "<h2>18. Formater un prix</h2>";

            /*
* EXERCICE 19 — Afficher les produits chers
* ------------------------------------------
* À partir d’un tableau de produits, affiche uniquement ceux
* dont le prix est > 50€.
*/
            echo "<h2>19. Filtrer les produits chers</h2>";

            /*
* EXERCICE 20 — Simuler un panier complet
* ----------------------------------------
* À partir d’un tableau de produits avec :
*  - nom
*  - prix unitaire
*  - quantité
* Affiche chaque ligne avec prix total (prix * quantité)
* puis affiche le total global du panier.
*/
            echo "<h2>20. Panier complet (HTML + Calcul)</h2>";
