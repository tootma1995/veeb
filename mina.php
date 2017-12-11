<?php
/**
 * Created by PhpStorm.
 * User: norsi
 * Date: 11/12/2017
 * Time: 12:11
 */
// üherealine kommentaar
/*
 * mitmerealine kommentaar
 * on siin
 * olemas
 */
$norman = 'Norman';
echo 'Echo: Minu nimi on ' . $norman . ".<br/>"; //käsk
print 'Print: Minu nimi on '. $norman . '.<br/>'; //funktsioon
print("Print(): Minu nimi on $norman."); // kahekordsed jutumärkidega näeb muutuja väärtust

$var1 = 5;
$var2 = 5.0;
$var3 = '5';
$var4 = 2;
$var5 = 2.0;
$var6 = '2';
$var7 = true;
$var8 = false;

echo $var1 . ' - ' . gettype($var1) . '<br/>';
echo $var2 . ' - ' . gettype($var2) . '<br/>';
echo $var3 . ' - ' . gettype($var3) . '<br/>';
echo $var4 . ' - ' . gettype($var4) . '<br/>';
echo $var5 . ' - ' . gettype($var5) . '<br/>';
echo $var6 . ' - ' . gettype($var6) . '<br/>';
echo $var7 . ' - ' . gettype($var7) . '<br/>';
echo $var8 . ' - ' . gettype($var8) . '<br/>';

#test

?>