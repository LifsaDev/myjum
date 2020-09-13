<?php
    session_start();
    $host = 'localhost';
    $user ='root';
    $password= '';
    $database = 'ecommerce';

    $conn = mysqli_connect($host,$user,$password,$database);
    if(!$conn){
        die('Connection failed'. mysqli_connect_error());
    }else{
        echo "Connection successfull";
    };



?>