<?php
    require_once 'POST_header.php';
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username = $_POST['username'];
    }
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $password = $_POST['password'];
    }
    if(isset($username) && isset($password)){
        echo $username." ".$password;
    }

