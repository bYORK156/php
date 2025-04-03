<?php

var_dump($_GET);


if (!empty($_GET)) {

    echo "<p> article : " . $_GET['article'] . "</p>";
    echo "<p> prix : " . $_GET['prix'] . "€" . "</p>";
    echo "<p> type : " . $_GET['category'] . "</p>";

}



?>


<a href="page1.php?article=chemise&prix=12&category=vetement">produits numéro 1</a>