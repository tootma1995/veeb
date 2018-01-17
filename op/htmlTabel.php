<?php
/**
 * Created by PhpStorm.
 * User: Norman
 * Date: 17/01/2018
 * Time: 11:48
 */

require_once 'tabel.php';


class htmlTabel extends tabel
{
    var $taustavarv='';

    public function __construct(array $pealkirjad, $varv='')
    {
        parent::__construct($pealkirjad);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv){
        $this->taustavarv = $varv;
    }

    function prindiTabel(){
        if ($this->taustavarv == ''){
            echo '<table border="1">';
            echo '<tr>';
            foreach ($this->pealkirjad as $pealkiri){
                echo '<th>'.$pealkiri.'</th>'.' ';
            }
            echo "</tr>";
            foreach ($this->tabelisisu as $reaElemedid){
                echo '<tr>';
                foreach ($reaElemedid as $reaElement){
                    echo '<td>'.$reaElement.'</td>';
                }
                echo "</tr>";
            }
            echo '</table>';

        } else {
            echo '<table border="1">';
            echo '<tr>';
            foreach ($this->pealkirjad as $pealkiri){
                echo '<th>'.$pealkiri.'</th>'.' ';
            }
            echo "</tr>";
            foreach ($this->tabelisisu as $reaElemedid){
                echo '<tr bgcolor="'.$this->taustavarv.'">';
                foreach ($reaElemedid as $reaElement){
                    echo '<td>'.$reaElement.'</td>';
                }
                echo "</tr>";
            }
            echo '</table>';
        }
    }
}