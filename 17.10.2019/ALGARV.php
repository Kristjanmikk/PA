<?php



    for ($number=1; $number <= 20; $number++) {
        if ($number < 2) {
            echo "antud arv ei kuulu valitud vahemikku" . "<br>";
        } else {
            $jagaja = 2;
            while ($number % $jagaja != 0) {
                $jagaja++;
            }
        }
        if ($number == $jagaja) {
            echo $number . " on algarv"."<br>";

        } else {
            echo $number . "ei ole algarv"."<br>";
        }
    }