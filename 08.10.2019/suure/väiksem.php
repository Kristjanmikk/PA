<?php

$nb1 = $_GET["number1"];
$nb2 = $_GET["number2"];



if(empty($nb1) or empty($nb2)){
    echo "väljad on tühjad";
    print '<a href="väiksemvorm.php"> Palun ära jäta lahtreid tühjaks</a> <br>';
} else if($nb1 > $nb2){
    echo "number 1 : ".$nb1."on suurem kui number 2 : ".$nb2;
    print '<a href="väiksemvorm.php"> proovi uuesti uute arvudega</a> <br>';
}else if($nb2 > $nb1){
    echo "number 2 : ".$nb2."on suurem kui number 1 : ".$nb1;
    print '<a href="väiksemvorm.php"> proovi uuesti uute arvudega</a> <br>';
}else if($nb2==$nb1){
    echo " võrdsed ";
    print '<a href="väiksemvorm.php"> proovi uuesti uute arvudega</a> <br>';
}