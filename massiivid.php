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
    for($i=0;$i < $pikkus;$i++) {
        $massiiv[] = rand(0,99);
    }
    return $massiiv;
}

echo '<pre>';
echo print_r(looMassiiv(10));
echo '</pre>';

/* funk nimega valjastaMassiiv */

function valjastaMassiiv($massiiv){
    echo "<table border='1'>";
        echo '<tr>';
            foreach($massiiv as $liige){
                print '<td>' . $liige . '</td><br/>';
            }
        echo '</tr>';
    echo '</table>';
}

$s = array(2,3,4,5,6,7,8,9);
valjastaMassiiv($s);
echo '<hr/>';

/* looMassiiv funk */

function loo2DMassiiv($read,$veerud){
    $massiiv2D=array();
    for($i = 0;$i<$read;$i++){
        $massiiv2D[]=array();
        for($j=0;$j<$veerud;$j++){
            $massiiv2D[$i][]=rand(0,99);
        }
    }
    return $massiiv2D;
}

echo '<pre>';
print_r(loo2DMassiiv(2,3));
echo '</pre>';