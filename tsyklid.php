<?php
/**
 * Created by PhpStorm.
 * User: norsi
 * Date: 15/12/2017
 * Time: 13:14
 */

$varv = '';
for($arv=1;$arv<=10;$arv++){
    if($arv%2==0){
        $varv='red';
    } else {
        $varv='blue';
    }
    echo '<p style="color: '.$varv.';">'.$arv.'.</p>';
}

$kord = 0;
while(++$kord <= 4){
    if($kord==3) continue;
    echo '<i>'.$kord.'. kord</i><br>';
}

do {
    if($kord > 5) break;
    echo '<b>'.$kord.'. kord</b>';
    $kord++;
} while ($kord <=5);

?>