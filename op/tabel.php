<?php
/**
 * Created by PhpStorm.
 * User: Norman
 * Date: 15/01/2018
 * Time: 15:07
 */

class tabel
{
    // klassi muutujad
    var $pealkirjad = array();
    var $tabelisisu = array();
    var $veergudearv;

    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veergudearv = count($pealkirjad);
    }

}