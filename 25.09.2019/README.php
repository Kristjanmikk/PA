# Päeva teemad
## Väljund
```
<?php
print "Tekst mida soovid väljastada";
?>
```
või
```
<?php
echo "Tekst mida soovid väljastada";
?>
```
## Muutujad
* Muutuja defineerimine
```
<?php
$muutujaNimi = väärtus;
?>
```
* Muutuja nimed on:
    * nimi on loogiline
    * kasuta täisnimi
    * kasuta camelStyle
* Muutuja kasutamine
```
<?php
echo "Mingi tekst ".$muutujaNimi." ja veel mingi tekst";
?>
```
## Andmetüübid
* Sõned (string) - jutumärkide või ülakomade vahel olev väärtus
```
<?php
$eesNimi = "SinuEesnimi";
?>
```
* Täisarvud
```
<?php
$numberYks = 6;
$numberKaks = -8;
?>
```
* Komaga arvud, ehk reaalarvud - koma asemel on punkt!
```
<?php
$pikkus = 1.78;
?>
```
## Operaatorid
* = - omistamisoperaator - omistab muutujale väärtus
* . - ühendamisoperaator - ühendab tekst ja muutuja väärtus omavahel kokku
## Kasutaja sisend
Ühes failis pane kokku HTML vorm ja teises on vormi töötlev action fail:
```
<?php
// input.php
<form action="input_do.php method="get">
    <input type="text" name="inputNimi">
</form>
?>
```

```
<?php
// input_do.php
$vormiAndmed = $_GET['inputNimi'];
echo $vormiAndmed;
?>
```


// muutuja defineerimine ja väärtuse vütmine vormist
$nimi = $_GET["nimi"];
$perenimi = $_GET["perenimi"];
$email = $_GET["email"];
$pikkus = $_GET["pikkus"];
$kaal = $_GET["kaal"];



print "nimi:".$nimi."<br>";
print "perenimi:".$perenimi."<br>";
print "email:".$email."<br>";
print "pikkus:".$pikkus."<br>";
print "kaal:".$kaal."<br>";



echo "<hr>";
print '<a href="input.php"> sisesta andmed uue;

<form action="input_do.php" method="get">
    <div>
        <label for="nimi">Nimi:</label>
        <input type="text" id="nimi" name="nimi">
    </div>
    <div>
        <label for="perenimi">perenimi:</label>
        <input type="text" id="perenimi" name="perenimi">
    </div>
    <div>
        <label for="email">email:</label>
        <input type="text" id="email" name="email">
    </div>
    <div>
        <label for="pikkus">pikkus:</label>
        <input type="number" id="pikkus" name="pikkus">
    </div>
    <div>
        <label for="kaal">kaal:</label>
        <input type="number" id="kaal" name="kaal">
    </div>


    <input type="submit" value="saada">
</form>