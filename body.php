<?php
    ob_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
</head>
<body>
    <h1>No Header</h1>
    <?php
    header('Location: Header/header.php');
    ?>
</body>
</html>


<!--!doctype>html>(head>title)+(body)-->