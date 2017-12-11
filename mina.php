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
print("Print(): Minu nimi on $norman.<br/>"); // kahekordsed jutumärkidega näeb muutuja väärtust
// eri tüüpi muutujad
$var1 = 5;
$var2 = 5.0;
$var3 = '5';
$var4 = 2;
$var5 = 2.0;
$var6 = '2';
$var7 = true;
$var8 = false;
// väljastan muutujatüübid
echo "var1: " . $var1 . ' - ' . gettype($var1) . '<br/>'; // pärast selle rea kirjutamist vajuta ctrl+d
echo "var2: " . $var2 . ' - ' . gettype($var2) . '<br/>';
echo "var3: " . $var3 . ' - ' . gettype($var3) . '<br/>';
echo "var4: " . $var4 . ' - ' . gettype($var4) . '<br/>';
echo "var5: " . $var5 . ' - ' . gettype($var5) . '<br/>';
echo "var6: " . $var6 . ' - ' . gettype($var6) . '<br/>';
echo "var7: " . $var7 . ' - ' . gettype($var7) . '<br/>';
echo "var8: " . $var8 . ' - ' . gettype($var8) . '<br/>';
// == - väärtuse võrdlemine, === - tüübi+väärtuse võrdlemine
$tulemus = $var1 == $var2;
echo 'kas $var1 == $var2? ' . $tulemus . "<br/>";
$tulemus = $var1 == $var3;
echo 'kas $var1 == $var3? ' . $tulemus . "<br/>";
$tulemus = $var1 === $var3;
echo 'kas $var1 === $var3? ' . $tulemus . "<br/>";
$tulemus = $var1 === $var4;
echo 'kas $var1 === $var4? ' . $tulemus . "<br/>";
$tulemus = $var1 != $var4;
echo 'kas $var1 != $var4? ' . $tulemus . "<br/>";
echo '<hr/>';
$a = 2; $b = 5;
$c = $a++; $d = $b--;
echo 'a = ' . $a . ', b = ' . $b . ', c = ' . $c . ', d = ' . $d . '<br/>';
$a = 2; $b = 5;
$c = ++$a; $d = --$b;
echo 'a = ' . $a . ', b = ' . $b . ', c = ' . $c . ', d = ' . $d . '<br/>';
?>