<?php
function getHeader($startSession,string $title) {
    if($startSession){
        session_start();
    }
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
    <?php
}


function getFooter(){
    ?>
    </body>
    <?php
}
?>