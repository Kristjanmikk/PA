<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border: solid 2px #333;
            border-collapse: collapse;
        }
        th, td{
            text-align: center;
            padding: 20px;
        }
        thead{
            background-color: coral;
        }
        body{
            font-family: "Agency FB";
            font-size: 20px;
        }
    </style>
</head>
<body>



<?php

$x = 10;

echo "x =".$x."<br>";
$x++;
// post operaator $y = $x++ see ei tööta y jääb 10 aga pre operaator $y = ++$x
// $x-- teeb väiksemaks

$y = ++$x;
echo "y = ".$y."<br>";
echo "x =".$x."<br>";


$z = 8;
echo"
    <table>
        <thead>
        <tr>
            <th>Operaator</th>
            <th>lühend</th>
            <th>Tulemus</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>x = x + 2</th>
            <th>x += 2</th>
            <th>".($z +=2)."</th>
        </tr>
        </tbody>
        ";

$z = 8;
echo "       
         <tbody>
        <tr>
            <th>x = x - 2</th>
            <th>x -= 2</th>
            <th>".($z -=2)."</th>
        </tr>
        </tbody>
        
";

$z = 8;
echo "             
        
        <tbody>
        <tr>
            <th>x = x * 2</th>
            <th>x *= 2</th>
            <th>".($z *=2)."</th>
        </tr>
        </tbody>

";

$z = 8;
echo "             
        <tbody>
        <tr>
            <th>x = x / 2</th>
            <th>x /= 2</th>
            <th>".($z /=2)."</th>
        </tr>
        </tbody>
";

$z = 8;
echo "     
         
        <tbody>
        <tr>
            <th>x = x % 2</th>
            <th>x %= 2</th>
            <th>".($z %=2)."</th>
        </tr>
        </tbody>
        
        
        
</table>
";




?>
</body>
</html>