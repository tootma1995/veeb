<?php
/**
 * Created by PhpStorm.
 * User: norsi
 * Date: 15/12/2017
 * Time: 13:02
 */

header('Refresh:0.2');
for($rida=1;$rida<=5;$rida++){
    $varv = '#';
    for ($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0,15);
        $juhuHex=dechex($juhuTaisarv);
        $varv = $varv.$juhuHex;
    }
    echo '<font color="'.$varv.';"> Värviline tekst </font><br/>';
}

?>