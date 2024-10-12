<?php
    // r -> read w -> write a -> append r+ -> read+write w+ -> write+read a+ -> comment+write
    echo readfile("../files.txt");
