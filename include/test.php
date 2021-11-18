<?php
require_once 'fonction.php';
$content=\file_get_contents('data.yaml');
$alerts=yaml_parse($content);
title('Fonction Somme');
title('Exemple',2);
htmlHeader('88','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

foreach ($alerts as $alert){
    bsAlert ($alert[0],$alert[1]??'primary');
}
?>