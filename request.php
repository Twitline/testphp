<h1>Recuperation du GET</h1>
<h2>Liens exemple</h2>
<ul>
    <li><a href="?q=">Q vide</a></li>
    <li><a href="?q=hello&repeat=1">hello</a></li>
</ul>
<h2>Valeur de parametre q(exemple)</h2>
<ul>
    <li>Valeur :<?php echo $_GET["q"] ?></li>
    <li>Valeur :<?php echo $_GET["repeat"]??0 ?></li>
</ul>
<?php
//Contenu de GET
var_dump($_GET);