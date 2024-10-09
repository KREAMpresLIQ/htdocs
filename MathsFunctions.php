<?php
    $a = 5;
    $r = 5.89;
    $f = 9.6;
    $c = 10.4;
    $s = 25;
    $p = 3;
    $pi = pi();
    $min = array(1,5,6,8,2,5,-21,144);
    $max = array(1,5,6,8,2,5,-21,144);
    $sin = 0.5;
    $cos = 0.5;
    $tan = 0.5;
    $ctan = 1/tan($tan);
    $log = 100;
    echo "ABS: ".abs($a)."<br>";
    echo "ROUND: ".round($r)."<br>";
    echo "FLOOR: ".floor($f)."<br>";
    echo "CEIL: ".ceil($c)."<br>";
    echo "SQRT: ".sqrt($s)."<br>";
    echo "POW: ".pow($p,3)."<br>";
    echo "PI: ".$pi."<br>";
    echo "Maximum: ".max(1, 2, -2, 0, -9, 8)."<br>";
    echo "Minimum: ".min(1, 2, -2, 0, -9, 8)."<br>";
    echo "Minimum Array: ".min($min)."<br>";
    echo "Maximum Array: ".max($max)."<br>";
    echo "Sinus: ".sin($sin)."<br>";
    echo "Cosinus: ".cos($cos)."<br>";
    echo "Tangens: ".tan($tan)."<br>";
    echo "CoTangens: ".$ctan."<br>";
    echo "LOG: ".log10($log)."<br>";

    $valid = log10(0);
    if(is_finite($valid)){
        echo "Valid.<br>";
    }else{
        echo "Not Valid!<br>";
    }

    if(is_infinite($valid)){
        echo "Valid.<br>";
    }else{
        echo "Not Valid!<br>";
    }

    echo dechex(16773411)."<br>";
    echo hexdec("fff123")."<br>";
    echo decoct("123")."<br>";
    echo octdec("173")."<br>";
    echo decbin("324")."<br>";
    echo bindec("1110101")."<br>";