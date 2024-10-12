<?php
// r -> read w -> write a -> append r+ -> read+write w+ -> write+read a+ -> comment+write
    $file = fopen("notepad.txt", "r") or die("Incorrect file");
    //echo fread($file, filesize("notepad.txt")); // utf8_encode - remove in php 9
    while(!feof($file)){
        echo fgets($file)."<br>";
    }
    fclose($file);