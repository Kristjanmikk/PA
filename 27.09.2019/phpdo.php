<?php
$raadius = $_GET["raadius"];

$circumference = 2 * $raadius * M_PI;

$area = $raadius * $raadius * M_PI;

print "pindala = ".$area."<br>";
print "ümbermõõt = ".round($circumference, 3)."<br>";

print '<a href="php input.php"> sisesta andmed uuesti</a> <br>';

//muutujate andme tüüpi ja väärtuste kontroll var_dump($area); näitab andme tüüpi ja väärtust
$circumferenceÜmardatud = round($circumference, 3);

print $circumferenceÜmardatud."<b>";
