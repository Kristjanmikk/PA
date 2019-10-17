<?php
$maxcount = 29;

$count = 1;

$sum = 0;

while($count <= $maxcount){
    $element = 1 / (2* $count-1);
    if($count % 2 !=0){
        $sum= $sum + $element;
    }else{
        $sum= $sum- $element;
    }
    $count++;
}
echo "arvutatud pi: ".($sum*4)."<br>";
echo "kontroll pi = ".pi();