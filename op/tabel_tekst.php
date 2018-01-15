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

echo '<pre>';
print_r($minuTabel);
echo '</pre>';