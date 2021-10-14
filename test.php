<form method="post" action="test.php?p=200"> 
    <input type="number" name="p">
    <input type="text" name ="client">
    <input type="submit">
</form>
<a href="?p=55">page 55</a>
<p>
<?php
echo $_REQUEST['p']??'pas de valeur';
?>
</p>
<?php
var_dump($_POST);
var_dump($_GET);
?>