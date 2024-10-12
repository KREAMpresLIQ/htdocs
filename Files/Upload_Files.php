<?php
if (isset($_POST['submit'])){
//    echo '<pre';
//    print_r($_FILES['file']);
    move_uploaded_file($_FILES['file']['tmp_name'],"uploaded/".$_FILES['file']['name']);
}