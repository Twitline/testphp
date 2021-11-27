<?php
require_once "fonctions3.php";
?>
<form method=POST>
    <div>
        <input type="radio" name="r1" id="Chrome" value="Chrome">
        <label for="Chrome">Chrome</label>
        <input type="radio" name="r1" id="Firefox" value="Firefox">
        <label for="Firefox">Firefox</label>
        <input type="radio" name="r1" id="IE" value="IE">
        <label for="IE">IE</label>
        <input type="radio" name="r1" id="Opera" value="Opera">
        <label for="Opera">Opera</label>
        <input type="radio" name="r1" id="Autre" value="Autre">
        <label for="Autre">Autre</label>
    </div>
    <input type="submit" value="Valider">
</form>
<?php
if (isset($_POST['r1'])){
    $_SESSION['navigateur']=$_POST['r1'];
    echo($_SESSION['navigateur']);
}