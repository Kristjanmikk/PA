<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if statements</title>

</head>


<body>


<?php


/*
$arv = 0;

    if($arv > 0){
        print $arv." on positiivne";
    }else if($arv == 0){
        print "arv on null";
    }else{
        print $arv." on negatiivne";
   }
   */

$c = 10;

    if($c <= -30){
        echo '<body style="background-color:darkblue">';
        echo $c." kraadi";
    }
    if($c>-30 and $c < 0){
        echo '<body style="background-color:lightblue">';
        echo $c." kraadi";
    }else if($c >= 0 and $c < 10){
        echo '<body style="background-color:lightgreen">';
        echo $c." kraadi";
    }else if($c >= 10 and $c < 30){
        echo '<body style="background-color:lightyellow">';
        echo $c." kraadi";
    }else{
        echo '<body style="background-color:orange">';
        echo $c." kraadi";
    }
?>
</body>
</html>
