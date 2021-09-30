<?php
    setlocale(LC_ALL, 'nl_NL');
?>
<h1>Du html</h1>
<p>paragraphe</p>
<h1>Du Php</h1>
<p><?php
    $date=date("D d M Y");
    echo "Salut ! <br>";
    echo "Nous sommes le <b>{$date}</b>";
?>
</p>