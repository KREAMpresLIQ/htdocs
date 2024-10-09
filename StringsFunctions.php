<?php
    $str = "Hello World!";

    echo "strlen: ".strlen($str)."<br>";
    echo "str_word_count: ".str_word_count($str)."<br>";
    echo "strrev: ".strrev($str)."<br>";

/**
 * @param $str
 * @return bool
 */
function palindrome($str):bool
    {
        if($str==strrev($str)){
            return true;
        }
        return false;
    }

    $str = "gezakekazeg";

    if(palindrome($str)){
        echo "Valid!"."<br>";
    }else{
        echo "Not Valid!"."<br>";
    }

    $str = "Hello World!";
    echo "strpos: ".strpos($str,"lo")."<br>";

    echo "str_replace: ".$str = str_replace("World", "Vietnam", $str)."<br>";
    $str = "sahbjkasdkjs2147364281";
    echo "str_shuffle: ".str_shuffle($str)."<br>";
    $str = substr($str, 2, 7);
    echo "substr: ".$str."<br>";

    $str1 = "Strings things";
    $str2 = "Another Strings things";
    similar_text($str1, $str2,$result)."<br>";
    echo "similar_text: ".$result."<br>";

    $str = "Hello World!";
    echo "strtolower: ".strtolower($str)."<br>";
    echo "strtoupper: ".strtoupper($str)."<br>";