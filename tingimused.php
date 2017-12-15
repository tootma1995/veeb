<?php
/**
 * Created by PhpStorm.
 * User: norsi
 * Date: 15/12/2017
 * Time: 12:39
 */
header("Refresh:5");
$vanus = rand(0,100);
if($vanus >= 0 and $vanus < 11){
    echo 'Oled laps, kes on '.$vanus.' a. vana.';
} elseif($vanus>10and$vanus<18){
    echo 'Oled nooruk, kes on '.$vanus.' a. vana.';
} elseif($vanus>17 and $vanus<65){
    echo 'Oled täiskasvanu, kes on '.$vanus.' a. vana.';
} else{
    echo 'Oled seenior, kes on '.$vanus.' a. vana.';
}

echo '<br/>';

// switch
$sokolaad=array_rand(array('Laima','Kalev','Kinder'),1);
switch ($sokolaad){
    case'Kalev':
        echo 'Super sokolaad';
        break;
    case 'Kinder':
        echo 'Laste lemmik';
        break;
    default:
        echo 'Sobib, kui muud pole';
        break;
}
echo '<br/>';
// ternary operaator katse
$pidu = 'hea';
$pidutseme = ($pidu =='hea') ? 'lähme peole' : 'istume kodus';
echo $pidutseme.'<br/>';
?>