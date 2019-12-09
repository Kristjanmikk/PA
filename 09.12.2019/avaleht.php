<?php
$menu = array(
    "index" => "avaleht",
    "portfoolio" => "portfoolio",
    "kaart" => "kaart",
    "kontakt" => "kontakt"
);
function pageMenu($menuData)
{
    foreach ($menu as $fileName => $menuName) {
        $link = "avaleht.php";
        if ($fileName != "index") {
            $link .= "?leht" . $fileName;
        } else {
            $link .= "?leht=" . $menuName;
        }
        echo '<a href=' . $link . "'>' .$menuName . '</a>&nbsp;&nbsp;";
}
}

function control($info){
    if(strlen($info))
}