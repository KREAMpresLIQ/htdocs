<?php
    $file = fopen("notepad.txt", "w") or die("Incorrect file");
    fwrite($file, "PHP Write\n");
    fwrite($file, "PHP No Write\n");
    fwrite($file, "PHP BreakRow?\n");
    fwrite($file, iconv('utf-8','ISO-8859-2', "öüéáéüöpőéőpü\n"));
    fwrite($file,"öüéáéüöpőéőpü");
    fclose($file);