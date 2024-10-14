<?php
    require_once "connectDatabase.php";
    global $db;
    if($result = $db->query("SELECT * FROM `humans` /*WHERE `id`=1*/")){
        echo '<pre>';
        print_r($result);
        //rows
//        if($result->num_rows){
//            $row = $result->fetch_assoc();
//            echo '<br>';
//            foreach ($row as $key=>$record){
//                echo '<b>'.$key.'</b>=>'.$record.'<br>';
//            }
//            echo '<br>';
//            echo $row['surname'];
//            echo '<br>';
//            echo '<pre>';
//            print_r($row);
//        }

        if($result->num_rows){
            echo '<pre>';
            while($row = $result->fetch_assoc()){
                echo $row['surname'],' ',$row['firstname'],'<br>';
                //print_r($row);
            }
        }



        $result->free();
    }

    $db->close();