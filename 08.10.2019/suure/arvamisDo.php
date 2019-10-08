<?php
$minu_arv = $_GET["number1"];
$kasutaja_arv = 72;

switch($minu_arv){
    case ($kasutaja_arv < $minu_arv): echo 'Arv on väiksem';
        print '<a href="arvamisVorm.php"> proovi uuesti</a> <br>';
        break;
    case ($kasutaja_arv > $minu_arv): echo 'Arv on suurem';
        print '<a href="arvamisVorm.php"> proovi uuesti</a> <br>';
        break;
    default: echo 'Õige, arvasid ära!';
}
?>