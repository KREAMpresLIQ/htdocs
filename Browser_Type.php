<?php
    echo $_SERVER['HTTP_USER_AGENT']."<br>";
    $browser_array = get_browser($_SERVER['HTTP_USER_AGENT'], true);
    echo '<pre>';
    print_r($browser_array);
    echo $browser_array['browser'];