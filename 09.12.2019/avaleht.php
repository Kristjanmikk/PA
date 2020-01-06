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

function control($pageName, $info){
    if(strlen($pageName)) > 0 and array_search($info, $menuData)){

    }
}