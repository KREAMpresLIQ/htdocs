<?php

/**
 * @param $ref
 * @return void
 */
function parameter(&$ref): void
    {
        $ref++;
        echo $ref."<br/>";
    }
    $x = 5;
    parameter($x);
    echo $x;
