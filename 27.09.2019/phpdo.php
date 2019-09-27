<?php
$raadius = $_GET["raadius"];

$circumference = 2 * $raadius * 3.14;

$area = $raadius * $raadius * 3.14;

print "pindala = ".$area."<br>";
print "ümbermõõt = ".$circumference."<br>";

print '<a href="php input.php"> sisesta andmed uuesti</a>';

//muutujate andme tüüpi ja väärtuste kontroll var_dump($area); näitab andme tüüpi ja väärtust