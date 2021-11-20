<?php
function getHeader(string $title) {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title><?=$title?></title>
            <link rel="stylesheet" href="<?=$style?>">
        </head>
        <body>
        
    </html>
}
<?php
function getFooter(){
    ?>
    </body>
}