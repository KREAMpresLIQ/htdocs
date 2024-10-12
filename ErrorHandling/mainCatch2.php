<?php

/**
 * @throws ErrorException
 */
function callBack($errNum, $errMsg, $errFile, $errLine){
        throw new ErrorException($errMsg, $errNum, 0, $errFile, $errLine);
    }

    set_error_handler("callBack");

    try {
        include 'header2.php';
    }catch(Exception $e){
        echo $e->getMessage();
    }