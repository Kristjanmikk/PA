<?php
//leia kas kasutaja on sõjaväeteenituse jaoks kõlbulik. Selleks peab olema täidetud järgmised tingimused: eestlane, 18+ ja vähemalt 9kl haridus


$rahvus = $_GET["nation"];
$vanus = $_GET["vanus"];
$haridus = $_GET["haridus"];

if(empty($vanus)){
    echo "enter vanus again";
    print '<a href="sõjavägiVorm.php">sisesta vanus </a> <br>';
}

else if($rahvus == "et" and $vanus >= 18 and $haridus != "N"){
    print "kõlbate kaitseväkke";
}else if($rahvus != "et"){
    echo "kohustus on ainult eestlastel";
    print '<a href="sõjavägiVorm.php"> proovi uuesti</a> <br>';
}else if($vanus < 18){
    echo "liiga noor";
    print '<a href="sõjavägiVorm.php"> proovi uuesti</a> <br>';
}else if($haridus = "N"){
    echo "algharidusega ei saa";
    print '<a href="sõjavägiVorm.php"> proovi uuesti</a> <br>';
}
// if(strLen($age) > 0)


/*
 * <select id="nation" name="nation">
 * <option value="et">eestlane</option>
 *  <option value="ru">venelane</option>
 *  <option value="fi">soomlane</option>
 *  <option value="se">rootslane</option>
 * </select>
 */