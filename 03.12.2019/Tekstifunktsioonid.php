<?php
$Nimi = $_GET['Nimi'];

$vaikenimi = strtolower($Nimi);
$suurealgusT = ucfirst($vaikenimi);

echo 'Hello: '.$suurealgusT;