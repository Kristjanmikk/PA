<?php



$Eesnimi = $_GET['eesnimi'];
$Perenimi = $_GET['perenimi'];


if (strpos($Eesnimi, 'ä') !== false) {
    $Eesnimi1 = str_replace("ä", "a", $Eesnimi);
}
if (strpos($Perenimi, 'ä') !== false) {
    $Perenimi1 = str_replace("ä", "a", $Perenimi);
}

if (strpos($Eesnimi, 'ö') !== false) {
    $Eesnimi1 = str_replace("ö", "o", $Eesnimi);
}
if (strpos($Perenimi, 'ö') !== false) {
    $Perenimi1 = str_replace("ö", "o", $Perenimi);
}

if (strpos($Eesnimi, 'ü') !== false) {
    $Eesnimi1 = str_replace("ü", "u", $Eesnimi);
}
if (strpos($Perenimi, 'ü') !== false) {
    $Perenimi1 = str_replace("ü", "u", $Perenimi);
}

if (strpos($Eesnimi, 'õ') !== false) {
    $Eesnimi1 = str_replace("õ", "o", $Eesnimi);
}
if (strpos($Perenimi, 'õ') !== false) {
    $Perenimi1 = str_replace("õ", "o", $Perenimi);
}

echo $Perenimi1.$Eesnimi1.'@hkhk.edu.ee';