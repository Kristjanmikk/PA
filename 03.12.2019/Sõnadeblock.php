<?php
$Sõna = $_GET['Sõna'];
echo 'Lause on :'.$Sõna.'<br>';

if (strpos($Sõna, 'noob') !== false){
    echo '<body style="background-color:lightblue">';
    echo 'Ei tohi kasutada sõna ****';
}

if (strpos($Sõna, 'homo') !== false){
    echo '<body style="background-color:lightblue">';
    echo 'Ei tohi kasutada sõna ****';
}

if (strpos($Sõna, 'pede') !== false){
    echo '<body style="background-color:lightblue">';
    echo 'Ei tohi kasutada sõna ****';
}
