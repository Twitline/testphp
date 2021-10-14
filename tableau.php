<?php
//Declaration de trois variables avec affectation
$a=0;
$b=1;
$c=44;
//Declaration d'un tableau
$entiers=[0,1,14,-2, 'une chaine',false, "valeur de c: $c"];
//Affichage du 14 à la position 2 (3eme element)
echo $entiers[2];
echo "<h1>Liste des valeurs du tableau</h1>";
foreach ($entiers as $valeur) {
    echo "Valeur : $valeur<br>";
}
//Declaration d'un tableau associatif
?>
<h1>Tableau associatif</h1>
<?php
$asso=['un'=>1,'deux'=>2,'trois'=>3,'Faux'=>true,'Chaine'=>'blabla'];
//Afficher element correspondant clé 3
echo $asso['trois'];
echo '<h2>Affichage des elements du tableau $asso</h2>';
foreach ($asso as $k=>$valeur) {
    echo "$k : $valeur<br>";
}

//ajout d'element dans un tableau
$asso["new"]='Nouvelle valeur';
//Affichage
var_dump($asso);
$entiers[]=18;
var_dump($asso);

//modification à une position
$asso["new"]='Autre val';
$entiers[1]=1000;
$entiers[15]=15;
var_dump($entiers);

//Nombre d'elements dans un tableau
echo "<h2>Nombre d'element</h2>";
echo "<h3>Tableau associatif</h2>";
echo count($asso);
?>