<?php

require_once 'config.php';

//loome ühenduse andmebaasiga
require_once 'DB_F.php';
$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);

//$sql = 'RENAME TABLE koolid2015 TO koolid';
//$result = query($sql, $ikt);

$sql = 'SELECT * FROM koolid';
$result = getData($sql, $ikt);
echo '<pre>';
print_r($result);