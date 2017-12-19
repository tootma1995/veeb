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

function looMassiiv(pikkus){
    massiiv = array();
    for($i;pikkus;$++) {
        massiiv[] = rand(0, 99)
    }
    echo print_r(massiiv);
    return massiiv;
}

looMassiiv(10);

?>