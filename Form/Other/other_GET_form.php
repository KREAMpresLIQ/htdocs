<?php
    if(isset($_GET['surname']) && !empty($_GET['surname'])){
        $sname = $_GET['surname'];
    }
    if(isset($_GET['firstname']) && !empty($_GET['firstname'])){
        $fname = $_GET['firstname'];
    }
echo $sname." ".$fname;