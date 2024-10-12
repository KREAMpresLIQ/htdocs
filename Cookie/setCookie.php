<?php
    if(isset($_POST['name']) && !empty($_POST['name'])) {
        setcookie('name', $_POST['name'], time() + 3600, '/', $_SERVER['SERVER_NAME'], );
    }
    header("Location:mainCookie.php");