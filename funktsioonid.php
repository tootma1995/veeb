<?php
/**
 * Created by PhpStorm.
 * User: norsi
 * Date: 15/12/2017
 * Time: 12:27
 */
/*
 * Koosta funktsioon nimega valjastaTabel,
 * mis võtab parameetritena tabeli ridade ja
 * veergude arv ning väljastab vastava suurusega
 * tabel, mille pesad on täidetud
 * juhuarvudega vahemikus 10-99*/

function valjastaTabel($read,$veerud){
    echo '<table border="1">';
        for ($reanr = 1; $reanr <= $read; $reanr++){
            echo '<tr>';
            for($veerunr = 1; $veerunr <= $veerud; $veerunr++){
                echo '<td style="background-color: '.genereeriVarv().'">';
                echo rand(10,99);
                echo '</td>';
            }
            echo '</tr>';
        }
    echo '</table><br>';
}
valjastaTabel(30,20);
/*
 * Loo funktsioon genereeriVarv mis genereerib ja tagastab
 * põhiprogrammile genereeritud värv kujul #XXXXXX
 * Vihje: kasuta tsüklis loodud kood ja teisenda see
 * funktsiooniks
 * */
/*
 * Rakenda loodud funktsioon iga pesa värvimiseks
 * */

function genereeriVarv(){
    $varv = '#';
    for ($i = 1; $i <= 6; $i++){
        $juhuarv = rand(0,15);
        $juhuHex = dechex($juhuarv);
        $varv = $varv.$juhuHex;
    }
    return $varv;
}

/*
 * Koosta funktsioon nimega tekstiTabel, mis võtab parameetrina
 * 4 sõna ja väljastab tabelit, mis koosneb
 * 4-st reas, iga rida sisaldab üks sõna, mis on parameetrina määratud
 *
 * Lahenduses ei tohi kasutada koodi dubleerimist! - st. ei ole võimalik
 * 4 korda kirjutada sama kood, vaid tuleb mõelda,
 * kuidas saab tsüklite ja muutujate defineerimisega lahendada antud
 * ülesanne
 * */

function tekstiTabel($sona1,$sona2,$sona3,$sona4){
    echo '<table border="1">';
    for ($reaNumber = 1; $reaNumber <= 4; $reaNumber++){
        echo '<tr>';
            echo '<td>';
                echo ${'sona'.$reaNumber};
            echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

tekstiTabel('See','On','Minu','Tabel');