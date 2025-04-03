<?php



?>

<h1>Superglobal $_GET</h1>
<h2>page 1</h2>

<p>En PHP, une variable SUPERGLOBAL est une variable intégré qui est toujours disponible, meme à l'interieur d'une fonction </p>

<p>Les superglobal sont predefinis par PHP</p>
<p>$GET est utilisé pour : </p>
<ul>
    <li>passer des informations entres pages</li>
    <li>filtrer ou rechercher des contenus</li>

</ul>

<p>Avantage de $_GET : </p>

<ul>
    <li>simple à utiliser</li>
    <li>données visible dans l'url</li>


</ul>



<a href="page2.php?article=jean&couleur=rouge&prix=123">jean rouge</a>
<a href="page2.php?article=jupe&couleur=blanche&prix=50">jupe blanche</a>

<p>"?" : ce caractère indique le debut des parametres GET qui sont envoyé au fichier PHP </p>

<P> $GET est utilisé pour evnvoyer des informations via l'url</P>
<p>ici "article=chemise" est un parametre GET, article est la clé et chemise est la valeur</p>

<p> & : ce caract-re sest utilisé pour séparer les parametres dans une URL</p>

<P>Limite de longuer de l'URL</P>
<p>les navigateurs er serveurs limotent la taillles des URL</p>
<p>En général : 2083 caractères MAX</p>

