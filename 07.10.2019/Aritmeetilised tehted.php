<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aritmeetika</title>
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

$x = 8;
$y = 2;
$liitmine = $x + $y;
$lahutamine = $x - $y;
$korrutamine = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;

echo"
    <table>
        <thead>
        <tr>
            <th>Operaator</th>
            <th>Nimetus</th>
            <th>Näide</th>
            <th>Tulemus</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>x + y</th>
            <th>Liitmine</th>
            <th>".$x." + ".$y."</th>
            <th>".$liitmine."</th>
        </tr>
        </tbody>
        
         <tbody>
        <tr>
            <th>x - y</th>
            <th>lahutamine</th>
            <th>".$x." - ".$y."</th>
            <th>".$lahutamine."</th>
        </tr>
        </tbody>
        
        <tbody>
        <tr>
            <th>x * y</th>
            <th>korrutamine</th>
            <th>".$x." * ".$y."</th>
            <th>".$korrutamine."</th>
        </tr>
        </tbody>
        
        <tbody>
        <tr>
            <th>x / y</th>
            <th>jagamine</th>
            <th>".$x." / ".$y."</th>
            <th>".$jagamine."</th>
        </tr>
        </tbody>
         
        <tbody>
        <tr>
            <th>x % y</th>
            <th>Modulus</th>
            <th>".$x." % ".$y."</th>
            <th>".$jaak."</th>
        </tr>
        </tbody>
        
        
        
</table>
";
?>
</body>
</html>



