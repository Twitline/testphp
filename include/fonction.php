<?php
function somme(int $a,int $b): int{
    return $a+$b;
}

/**
 * Crée un titre HTML d'un certain niveau.
 * @param string $content Contenu de la balise title
 * @param int $level Niveau du titre
 */
function title(string $content,int $level=1):void{
    echo "<h$level>$content</h$level>";
}

function htmlHeader(string $title,string $style):void{
    ?> 
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title><?=$title?></title>
            <link rel="stylesheet" href="<?=$style?>">
        </head>
        <body>
        </body>
    </html>
    <?php
}

function bsAlert(string $content,string $type='primary'):void{
    echo "<div class='alert alert-$type' role='alert'>$content</div>";
}

?>