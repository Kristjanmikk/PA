<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="sõjavägiDo.php" method="get">
    <div id="input-group">
        <label for="nation">kodakontsus</label>
        <select id="nation" name="nation">
            <option value="et">eestlane</option>
            <option value="ru">venelane</option>
            <option value="fi">soomlane</option>
            <option value="se">rootslane</option>
            </select>
    </div>
    <div id="input-group">
        <label for="vanus">vanus?</label>
        <input type="text" id="vanus" name="vanus">
    </div>
    <div id="input-group">
        <label for="haridus">mitu klassi haridust?</label>
        <select id="haridus" name="haridus">
             <option value="ph">põhiharidus</option>
            <option value="ke">keskharidus</option>
            <option value="kh">kõrgharidus</option>
            <option value="N">madalam</option>
        </select>
    </div>
    <input type="submit" value="saada">




</form>






</body>
</html>
