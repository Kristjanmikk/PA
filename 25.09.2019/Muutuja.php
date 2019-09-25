<?php

// muutuja defineerimine
//$muutujaNimi = väärtus;
// väärtused on andmed -erinevad andmetüübid
// tekst - string - teksti info "" jutumärkid vahel
// täisarvud - integer - 2,7,8,-2,-15
//komaga arvud, reaalarvud, - float - 3.5,4.21,16.2

$eesnimi = "kristjan";
$perenimi = "mikk";
$email = "kristjan.mikk@khk.ee";
$vanus = 19;
$pikkus = 1.80;
$kaal = 95;
$tekst = "tere";
$täisarv = 4;
$reaalarv = 3.521;

//print $eesnimi;
//print $email;
//print $perenimi;

print "Eesnimi: ".$eesnimi."<br>";
print "Perenimi: ".$perenimi."<br>";
print "Email: ".$email."<br>";
print "vanus: ".$vanus."<br>";
print "pikkus: ".$pikkus."<br>";
print "kaal: ".$kaal."<br>";


//muutujate dünaamiline defineerimine
$kehamassiindeks = $kaal / ($pikkus * $pikkus);
print "kehamassiindeks: ".$kehamassiindeks."<br>";









