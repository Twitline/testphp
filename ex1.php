<?php
require_once "fonctions3.php";
getHeader('Test');
?>
<form method="POST">
    <div>
        <label for="pseudo">Nom d'utilisateur :</label><br>
        <input type="text" name="pseudo" id="pseudo">
    </div>
    <input type="submit" value="valider">
</form>