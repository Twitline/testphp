<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <form method="GET">
            <label for="size">Size : </label>
            <input type="number" value="Nombre" name="size" id="size">
            <input type="submit" value="Valider">
        </form>
        <?php
            echo "<div style='font-size: {$size}px;'>Message de taille {$size}px en rouge</div>";
            ?>
    </body>
</html>