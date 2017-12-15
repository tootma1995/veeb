<?php
/**
 * Created by PhpStorm.
 * User: norsi
 * Date: 15/12/2017
 * Time: 12:27
 */

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