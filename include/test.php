<?php
require_once 'fonction.php';
$content=\file_get_contents('data.yaml');
$alerts=yaml_parse($content);
htmlHeader('88','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
title('Fonction Somme');
title('Exemple',2);
foreach ($alerts as $msg=>$type){
    bsAlert ($msg,$type);
}
?>