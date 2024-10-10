<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Related Functions</title>
    </head>
    <body>
        <?php
            $str = "<b>Bold</b> and <i>italic</i> style &#9829; Simon\'s door Hello World! ";
            echo $str."<br>";
            echo htmlspecialchars($str)."<br>";
            echo htmlentities($str)."<br>";
            echo strip_tags($str)."<br>";
            echo stripcslashes($str)."<br>";
            echo stripslashes($str)."<br>";
            echo trim($str,"a")."<br>";

        ?>
    </body>
</html>
<?php
