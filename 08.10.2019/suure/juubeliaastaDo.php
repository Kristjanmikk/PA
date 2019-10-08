<?php

$nb1 = $_GET["number1"];

$juubeliaasta = $nb1 % 5;

if($juubeliaasta == 0){
    echo "juubeliaasta";
    print '<a href="juubeliaastaVorm.php"> proovi uue aastaga</a> <br>';
}
else{
    echo "ei ole juubeliaasta";
    print '<a href="juubeliaastaVorm.php"> proovi uue aastaga</a> <br>';
}