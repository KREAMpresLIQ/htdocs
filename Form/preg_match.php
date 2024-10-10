<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Related Functions</title>
    </head>
    <body>
        <form action="preg_match.php" method="post">
            <label>
                <input type="text" name="str">
            </label>
            <input type="submit" value="submit">
        </form>
        <br>
    </body>
</html>
<?php
    if(isset($_POST['str']) && !empty($_POST['str'])){
        $str = $_POST['str'];
        if(preg_match("/^[a-zA-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ]$/u", $str))
        {
            echo "TRUE";
        }else{
            echo "FALSE";
        }
    }

//  if(preg_match("/^(\w|\s){1,20}$/", $str))
//  if(preg_match("/^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/", $str))
//  if(preg_match("/^\d{5}(-\d{4})?$/", $str))
//  if(preg_match("/^\d{5}\?\d{4}?$/", $str))
//  if(preg_match("/^.+@.+\.[a-z]{2, }$/", $str))
//  if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $str))
//  if(preg_match("/^.+@.+\.[a-z]{2,}$/", $str))