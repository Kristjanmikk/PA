
<h1>Arvutamine</h1>
<?php
//lisab vormist saadud andmed muutujasse
$keraRaadius = $_GET['kera-raadius'];
$KoonusePõhjaRaadius = $_GET['Koonuse-põhja-raadius'];
$KoonuseKõrgus= $_GET['Koonuse-kõrgus'];
$SilindriPõhjaRaadius = $_GET['Silindri-põhja-raadius'];
$SilindriKõrgus = $_GET['Silindri-kõrgus'];


function KeraRuumala($keraRaadius){
    $ruumala1 = 4*pi() * pow($keraRaadius, 2);
    return round($ruumala1, 3);

}
function Koonuseruumala($KoonusePõhjaRaadius, $KoonuseKõrgus){
    $põhjapindala = pi() * pow($KoonusePõhjaRaadius, 2);
$ruumala2 = (1/3)* $põhjapindala * $KoonuseKõrgus;
    return $ruumala2;
}

function SilindriRuumala($SilindriPõhjaRaadius, $SilindriKõrgus){
    $põhjapindala = pi() * pow($SilindriPõhjaRaadius, 2);
$ruumala3 =  $põhjapindala * $SilindriKõrgus;
    return $ruumala3;
}
if(count($GET) != 0) {
$keraruumala = KeraRuumala($keraRaadius);
echo 'Keraruumala on :'.$keraruumala;

$koonuseruumala =
}