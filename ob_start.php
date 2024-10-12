<!DOCTYPE html>
<html lang="en">
    <head>
        <title>

        </title>
    </head>

    <body>
        <?php
            function callback($buffer): array|string|null
            {
                return (str_replace("Lorem", "NoLOREM", $buffer));
            }
            ob_start("callback");
        ?>
        <p>Lorem ipsum, Lorem!</p>
        <?php
//            ob_end_flush();
            ob_end_clean();
        ?>
    </body>

</html>

<?php
