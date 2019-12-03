<?php

$Sõna = $_GET['Sõna'];

$SõnaPikkus = strlen($Sõna);
$First = 0;
$Tähed = 0;
$punktid = 1;

for($First=0; $SõnaPikkus>$First; $First++){
    $Tähthaaval = $Sõna[$Tähed];
    $Tähed ++;

    echo $Tähthaaval.'.';
}

