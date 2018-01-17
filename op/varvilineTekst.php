<?php
/**
 * Created by PhpStorm.
 * User: Norman
 * Date: 17/01/2018
 * Time: 11:08
 */

require_once 'tekst.php';

class varvilineTekst extends tekst
{
    var $tekstiVarv = '';

    public function __construct($sonad = '', $varv=''){ //lez overwrite dis constructor
        parent::__construct($sonad);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv){
       $this->tekstiVarv = $varv;
    }



}
