<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender   = $_post['gender'];
    $status   = $_POST['status'];
    $interest = $_POST['interest'];
    
    echo $username."</br>"
    echo $password."</br>"
    echo $gender."</br>"
    echo $status."</br>"
    echo $interest."</br>"
    foreach($interest as $value){
        echo $value;
}