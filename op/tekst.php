<?php
/**
 * Created by PhpStorm.
 * User: Norman
 * Date: 15/01/2018
 * Time: 14:21
 */

class tekst
{
    // klassi muutujad, omadused, variables
    var $sonad = '';


    // klassimeetodid, class methods
    /**
     * tekst constructor.
     * @param string $sonad
     */
    public function __construct($sonad='') // et errorit ei annaks parameetrita
    {
        $this->maaraTekst($sonad);
    }

    function maaraTekst($s){
        $this->sonad = $s;
    }

    function prindiTekst(){
        echo $this->sonad . '<br/>';
    }
}