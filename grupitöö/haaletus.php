<?php
<?php
require_once 'config1.php';
require_once 'db_fnc1.php';
$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);
?>
<?php

$otsus=$_GET["otsus"];
$eesnimi=$_GET["eesnimi"];
$perenimi=$_GET["perenimi"];
var_dump($eesnimi,$perenimi);

$sql = 'INSERT INTO Haaletaja (Eesnimi, Perenimi, Otsus, Hääletusaeg) VALUES ("'.$eesnimi.'","'.$perenimi.'","'.$otsus.'",now())';
$result = getData($sql, $ikt);
?>


<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="get" action="haaletus.php">
   Eesnimi:<br>
 <input type="text" name="eesnimi" id="eesnimi">
 <br>
Perenimi:<br>
 <input type="text" name="perenimi"  id="perenimi">
 <br>
   Otsus:<br>
   <input type="text" name="otsus" >
   <br><br>
 <input type="submit" value="Saada">
</form>

</body>
</html>
