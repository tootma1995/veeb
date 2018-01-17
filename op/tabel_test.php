<?php
/**
 * Created by PhpStorm.
 * User: Norman
 * Date: 15/01/2018
 * Time: 15:15
 */
require_once 'tabel.php';

// loome tabeli objekti
$minuTabel = new tabel(array('a','b','c','d'));

$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
$minuTabel->lisaRidaPealkirjadega(array('d'=>1,'c'=>2,'b'=>3,'a'=>4));

echo '<pre>';
print_r($minuTabel);
echo '</pre>';


$minuTabel->prindiTabel();



echo '<hr/>';

require_once 'htmlTabel.php';

// loome tabeli objekti
$minuTabel = new htmlTabel(array('a','b','c','d'),'#ff0011');

$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
$minuTabel->lisaRidaPealkirjadega(array('d'=>1,'c'=>2,'b'=>3,'a'=>4));

echo '<pre>';
print_r($minuTabel);
echo '</pre>';


$minuTabel->prindiTabel();