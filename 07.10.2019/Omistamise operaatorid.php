<?php

$x = 10;

echo "x =".$x."<br>";
$x++;
// post operaator $y = $x++ see ei tööta y jääb 10 aga pre operaator $y = ++$x
// $x-- teeb väiksemaks

$y = ++$x;
echo "y = ".$y."<br>";
echo "x =".$x."<br>";

