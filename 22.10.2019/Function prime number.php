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

            $result = true;
        } else {
            $result = false;
        }
        return $result;

}

function isprimenumber($number, $isprime){
    if($isprime){
        echo $number." on algarv"."<br>";
    }
    else{
        echo $number." ei ole algarv"."<br>";
    }
}
$number = rand(1,10);
isprimenumber($number, primenumber($number));

//define function, which will use the boolean result of the primenumber function and
// show the text : is prime or is not prime with the number value

/*
function algarv($arv){
        if($arv=="on algarv") {
            $result = "TRUE";
        }
        else{
            $result = "false";
            }
    return $result;
}

echo algarv(primenumber(rand(0, 1000)));
*/