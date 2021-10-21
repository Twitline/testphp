<?php
            $size=$_POST['size']??'12';
            $color=$_POST['color']??'black';
            $message=$_POST['text']??'Erreur';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <form method="POST">
            <div>
                <label for="size">Size : </label>
                <input type="number" name="size" id="size" value="<?=$size?>">
            </div>
            <div>
                <label for="color">Couleur : </label>
                <input type ="color" name="color" id="color"  value="<?=$color?>">
            </div>
            <div>
                <label for="text">Entrez votre commentaire : </label><br>
                <textarea rows="6" name="text" id="text"><?=$message?></textarea>
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
            
        </form>
        <?php
            echo "<div style='font-size: {$size}px; color: {$color}'>{$message}</div>";
            
            ?>
    </body>
</html>