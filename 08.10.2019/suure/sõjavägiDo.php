<?php
//leia kas kasutaja on sõjaväeteenituse jaoks kõlbulik. Selleks peab olema täidetud järgmised tingimused: eestlane, 18+ ja vähemalt 9kl haridus


$nb1 = $_GET["number1"];
$nb2 = $_GET["number2"];
$nb3 = $_GET["number3"];

if($nb1 == "eestlane" and $nb2 >= 18 and $nb3 >= 9){
    print "kõlbate kaitseväkke";
}else{
    echo "ei kõlba";
}
