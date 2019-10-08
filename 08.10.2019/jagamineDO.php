<?php
$nb1 = $_GET["number1"];
$nb2 = $_GET["number2"];
$jagamine = $nb1/$nb2;

if($nb2 == 0){
    echo"second number cant equal 0";
    print '<a href="0 jagamine.php"> sisesta andmed uuesti</a> <br>';
}
if($nb2 > 0 or $nb2 < 0){
    print $nb1."/".$nb2."=".$jagamine."<br>";
    print '<a href="0 jagamine.php"> proovi uuesti</a> <br>';
}