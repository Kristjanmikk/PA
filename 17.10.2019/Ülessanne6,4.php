<?php

$nb = 1;

for($rida=1; $rida<=50; $rida++){
    $ruut = $nb*$nb;
        $kuup = $nb*$nb*$nb;
            $juur = sqrt($nb);
            $nb++;
      echo "  arv  :".$nb;
    echo "  ruut  :".$ruut;
    echo "  kuup  :".$kuup;
    echo "  juur ".$juur;
    echo "<br>";
}