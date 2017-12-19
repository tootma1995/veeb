<?php
/**
 * Created by PhpStorm.
 * User: norsi
 * Date: 19/12/2017
 * Time: 08:54
 */

$arvud = array(5,4,3,2,1);
var_dump($arvud);
echo '<hr/>';
echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<hr/>';
echo 'Massiivis on elemente: ' . count($arvud);
$arvud[] = 0;
for($i;$i<count($arvud);$i++){
    echo $arvud[$i] . '</br>';
}
echo '<hr/>';
foreach ($arvud as $arv){
    echo '<i>' . $arv . '</i><br/>';
}
echo '<hr/>';

/* massiiv ül */

function looMassiiv($pikkus){
    $massiiv = array();
    for($i;$i < $pikkus;$i++) {
        $massiiv[] = rand(0,99);
    }
    return $massiiv;
}

echo '<pre>';
echo print_r(looMassiiv(10));
echo '</pre>';

/* funk nimega valjastaMassiiv */

function valjastaMassiiv($massiiv){
    echo "<table border='1'><tr>";
    foreach($massiiv as $liige){
        print '<th>' . $liige . '</th><br/>';
    }
    echo '</tr></table>';
}

$s = array(2,3,4,5,6,7,8,9);
valjastaMassiiv($s);