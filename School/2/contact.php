<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orai valami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <?php
    include 'mob_detect.php';
    ?>
</head>
<body>

<div class="container">
    <div class="header"> <h3 class="animated infinite bounce delay-2s">Email</h3>
        <i class="fa fa-car" style="font-size:60px;color:white;"></i></div>



        <div class="content">
            <form class="contact" action="mail.php" method="post">
                Name:<input type="text" name="name"><br><br>
                Email:<input type="email" name="email"><br><br>
                Message:<textarea name="message" rows="4" cols="50">
</textarea><br><br>

                <input class="button button1" type="submit" name="sb" value="Send">

            </form>
        </div>

    <div class="content"><a href="index.php">Home</a></div>

    <div class="footer"> <h3>Footer</h3> </div>


</body>
</html>





