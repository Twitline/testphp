<?php
require_once "fonction3.php";
require_once "user.php";

getHeader(true,"ExercicePHP");?>
<form method="POST" action="user.php">
    <div>
        <label for="user">Entrez votre pseudo</label>
        <input type="text" name="user" id="user">
    </div>
    <input type="submit" value="Valider">
</form>
<?php
echo ($user);
getFooter();