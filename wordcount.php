<?php
require_once "fonctionex7.php";
$string=$_POST['mot'];
$char=$_POST['lettre'];
?>
<h6>Chaine</h6>
<form method="POST">
    <div>
        <label for="mot">Texte</label><br>
        <textarea rows="3" name="mot" id="mot">Ecrivez votre texte</textarea>
    </div>
    <div>
        <label for="lettre">Tapez une lettre à compter</label><br>
        <input type="text" name="lettre" id="lettre">
    </div>
    <input type="submit" value="Compter">
</form>
<br>
<h6>Resultat</h6>
<p>
    Nombre de mot : <?php wordCount($string);?>
    <br>
    Nombre de lettre : <?php charCount($string,$char);?>
</p>