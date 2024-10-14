<?php
    //error_reporting(0);
    $db = new mysqli('127.0.0.1', 'root', '', 'webpage');
    if($db->connect_errno){
        echo $db->connect_error;
        die();
    }
