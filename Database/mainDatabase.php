<?php
global $db;
require_once 'connectDatabase.php';

    if ($result = $db->query("SELECT * FROM `humans`")){
        //Table save
        $table = $result->fetch_all(MYSQLI_NUM);
        echo '<pre>';
        print_r($table);
        foreach ($table as $row){
            foreach ($row as $record){
               echo $record.'*';
            }
            echo "<br>";
        }
//        echo $table[0][01]; // --> MYSQLI_NUM
//        echo $table[0]['surname']; // --> MYSQLI_ASSOC

        $result>free();
    }

    $db->close();
