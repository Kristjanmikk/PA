<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
            border: 1px #333 solid; border-collapse: collapse; text-align: center;
        }
        th, td {
            width: 40px;
            padding: 5px;
        }
    </style>
    <title>numbritega tabel</title>
</head>
<body>

<?php


function tableHeader($val1, $val2, $val3, $val4) {
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    for($col = 1; $col < 5; $col++) {
        echo '<th>' . ${val.$col} . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '</table>';
}

function tableBody($rowNumber, $colNumber){
    echo '<tbody>';
    for($row = 1; $row <= $rowNumber; $row++){
        echo '<tr>';
        for($col = 1; $col <= $colNumber; $col++){
            echo '<td>';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
}

function table($rowNumber, $colNumber) {
    echo '<table>';
    tableHeader('see', 'on', 'tabeli', 'päis');
    tableBody($rowNumber, $colNumber);
    echo '</table>';
}
table(5, 4);

?>
</body>
</html>
