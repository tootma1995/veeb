<?php
/**
 * Created by PhpStorm.
 * User: Norman
 * Date: 15/01/2018
 * Time: 14:27
 */
require_once 'tekst.php';

// loome teksti objekti
$minuTekst = new tekst();
// määrame kindla sõnad tekstist
$minuTekst->maaraTekst('Tere maailm');

// väljastame objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '</pre>';