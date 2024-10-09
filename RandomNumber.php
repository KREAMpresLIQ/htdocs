<?php
    mt_srand(seed: mktime(hour: 5));
    echo mt_rand()%10+1;
    echo "<br>";
    echo mt_rand(40,100)."<br>";
    echo mt_rand(-500,100)."<br>";
    echo mt_rand()%10+(mt_rand()%100/100)."<br>";
