<?php


function primenumber($number){
        if ($number < 2) {
            echo "antud arv ei kuulu valitud vahemikku" . "<br>";
        } else {
            $jagaja = 2;
            while ($number % $jagaja != 0) {
                $jagaja++;
            }
        }
        if ($number == $jagaja) {

            $result = $number . " on algarv " . "<br>";
        } else {
            $result = $number . " ei ole algarv " . "<br>";
        }
        return $result;

}
echo primenumber(rand(0, 1000));