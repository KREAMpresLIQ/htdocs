<?php
function mobileDetect(){
    require 'Mobile_Detect.php';

    $detect = new Mobile_Detect();

    if($detect-> isAndroidOS() OR $detect->isiOS()) {
        echo '<link rel="stylesheet" href="touch.css">'."\r\n";

    }else
        echo '<link rel="stylesheet" href="style.css">'."\r\n";
}
mobileDetect();