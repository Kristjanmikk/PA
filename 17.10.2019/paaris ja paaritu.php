<?php
$nb = 1;

for($rida=1; $rida<=10; $rida++) {
    $mod = $nb%2;
    if($mod != 0){
        echo "paaritu: ".$nb;
    }
    else{
        echo "paaris: ".$nb;
    }
    $nb++;
}