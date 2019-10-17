<?php



for($row=1; $row<=5; $row++){
    echo "*";
    for($col = 1; $col<= 5; $col++){
        echo "*";
        echo "&nbsp";
    }
    echo "<br>";
}

echo "<br>";


for($rida=1; $rida<=5; $rida++){
    for($veerg=1; $veerg<= $rida; $veerg++){
        echo '*';
    }
    echo '<br>';
}

echo "<br>";

for($rida=1; $rida<=5; $rida++){
    echo $rida;
    for($veerg=5; $veerg>= $rida; $veerg--){
        echo '*';
    }
    echo '<br>';
}