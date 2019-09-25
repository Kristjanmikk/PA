<?php
// muutuja defineerimine ja väärtuse vütmine vormist
$nimi = $_GET["nimi"];
$perenimi = $_GET["perenimi"];
$email = $_GET["email"];
$pikkus = $_GET["pikkus"];
$kaal = $_GET["kaal"];



print "nimi:".$nimi."<br>";
print "perenimi:".$perenimi."<br>";
print "email:".$email."<br>";
print "pikkus:".$pikkus."<br>";
print "kaal:".$kaal."<br>";



echo "<hr>";
print '<a href="input.php"> sisesta andmed uuesti</a>';