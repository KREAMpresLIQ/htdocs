<?php
    if(isset($_POST['submit'])){
        // size, format, valid
        $errors = array();
        $have = true;
        $type = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $_FILES['image']['name']=date("ymdhis").mt_rand().".".$type;
        if(!($type=="jpeg" || $type=="jpg" || $type=="png" || $type=="gif")){
            $have = false;
            array_push($errors, "JPEG, JPG, PNG or GIF format allowed only!");

        }
        if($_FILES['image']['size']>1000000){
            $have = false;
            array_push($errors," The file maximum size is 1MB!" );
        }
        if(file_exists("image/".$_FILES['image']['name'])){
            $have = false;
            array_push($errors, "This name is already exist!");
        }
        if($have){
            move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
            echo '<img src="images/'.$_FILES['image']['name'].'" />';
        }else{
            echo "<pre>";
            print_r($errors);
        }
    }
