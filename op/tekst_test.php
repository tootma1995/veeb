<?php
/**
 * Created by PhpStorm.
 * User: Norman
 * Date: 15/01/2018
 * Time: 14:27
 */
require_once 'tekst.php';

// loome teksti objekti
// määrame kindla sõnad tekstist
$minuTekst = new tekst('Tere maailm!');

// väljastame objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '</pre>';

// väljastame objekti korralikult
$minuTekst->prindiTekst();



echo '<hr/>';

require_once 'varvilineTekst.php';

// loome teksti objekti
// määrame kindla sõnad tekstist
$varvituTekst = new varvilineTekst('Tere maailm!');

// väljastame objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '</pre>';

// väljastame objekti korralikult
$varvituTekst->prindiTekst();


echo '<hr/>';

require_once 'varvilineTekst.php';

// loome teksti objekti
// määrame kindla sõnad tekstist
$roosaTekst = new varvilineTekst('Tere maailm!','#ff0066');

// väljastame objekti sisu test kujul
echo '<pre>';
print_r($roosaTekst);
echo '</pre>';

// väljastame objekti korralikult
$roosaTekst->prindiTekst();