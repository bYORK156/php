<?php


var_dump($_GET);

if (!empty($_GET)) {

    echo "<p> article :" . $_GET['article'] . "</p>";
    echo "<p> couleur :" . $_GET['couleur'] . "</p>";
    echo "<p> prix :" . $_GET['prix'] . "</p>";

}




?>







<a href="page1.php?article=jean&couleur=rouge&prix=123">jean rouge</a>
<a href="page1.php?hotel=luxe&location_nuit=150&localisation=barcelone">hotel de luxe</a>