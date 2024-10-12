<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
    <?php

    if(isset($_COOKIE['name']) && !empty($_COOKIE['name'])){
        echo "<p>Hi ".$_COOKIE['name']."<a href='deleteCookie.php'> Delete Cookie </a></p>";
    }else{
        ?>
        <form action="setCookie.php" method="post">
            Name: <label for=""><input type="text" name="name"></label>
            <label for=""><input type="submit" name="Send"></label>
        </form>
    <?php
    }
    ?>
</body>
</html>
<?php
