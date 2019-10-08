<?php
$nb1 = $_GET["number1"];
$nb2 = $_GET["number2"];
$jagamine = $nb1/$nb2;

if(empty($nb1) and empty($nb2)) {
    echo "väljad on tühjad";
    print '<a href="0 jagamine.php"> Palun ära jäta lahtreid tühjaks</a> <br>';
}
else if($nb2 == 0){
    echo"second number cant equal 0";
    print '<a href="0 jagamine.php"> sisesta andmed uuesti</a> <br>';
}else if($nb2 > 0 or $nb2 < 0){
    print $nb1."/".$nb2."=".$jagamine."<br>";
    print '<a href="0 jagamine.php"> proovi uute arvudega</a> <br>';
}