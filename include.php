<?php
include "header.php";
$ligne=$_POST['ligne']??'10';
$colonne=$_POST['colonne']??'10';
?>
<form method="post">
    <div>
        <label for="ligne">Nombre de ligne </label>
        <input type="number" name="ligne" id="ligne" value="<?=$ligne?>">
    </div>
    <div>
        <label for="colonne">Nombre de collones</label>
        <input type="number" name="colonne" id="colonne" value="<?=$colonne?>">
    </div>
    <div>
        <input type="submit" value="Ok">
    </div>
</form>

<table border='1'>
    <?php
    for ($l=0; $l<$ligne; $l++){
        echo "<tr>";
        for ($c=0; $c<$colonne ;$c++){
            echo "<td>{$l} - {$c}</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<?php
include "footer.php";
?>