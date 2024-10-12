<?php
    $file = fopen("notepad.txt", "a") or die ("Incorrect file");
    fwrite($file, "Append testing\n");
    fwrite($file, "Append testing2\n");
    fwrite($file, "Append testing3\n");
    fclose($file);
